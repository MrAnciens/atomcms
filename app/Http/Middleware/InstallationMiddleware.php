<?php

namespace App\Http\Middleware;

use App\Models\WebsiteInstallation;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class InstallationMiddleware
{
    private WebsiteInstallation $installation;

    public function handle(Request $request, Closure $next)
    {
        $this->prepareInstallation();

        // Redirect to index if completed
        if ($this->installation->completed) {
            return $this->redirectToWelcomeIfInstalled($request, $next);
        }

        $isInstallationStepHandled = $this->handleInstallationSteps($request);

        if (!$isInstallationStepHandled) {
            return $this->redirectIfNotCompleted();
        }

        return $next($request);
    }

    private function prepareInstallation(): void
    {
        $tables = ['website_installation', 'sessions'];

        foreach ($tables as $table) {
            $this->migrateTable($table);
        }

        $this->initInstallation();
    }

    private function migrateTable(string $tableName): void
    {
        if (!Schema::hasTable($tableName)) {
            try {
                $migration = findMigration($tableName);
                if (File::exists($migration)) {
                    Artisan::call("migrate", ['--path' => $migration]);
                    Log::info("Migration successful for table: {$tableName}");
                } else {
                    Log::error("Migration file not found for table: {$tableName}");
                }
            } catch (\Exception $e) {
                Log::error("Error migrating {$tableName}: " . $e->getMessage());
            }
        }
    }

    private function initInstallation(): void
    {
        if (WebsiteInstallation::doesntExist()) {
            $this->installation = WebsiteInstallation::create([
                'installation_key' => Str::uuid()
            ]);

            return;
        }

        $this->installation = WebsiteInstallation::first();
    }

    private function handleInstallationSteps(Request $request): bool
    {
        if ($this->isWelcomeStep($request)) {
            return true;
        }

        if ($this->isRedirectToWelcome($request)) {
            return false;
        }

        // Simply verify only the user who entered the installation key can access the installation
        if ($this->isInvalidAccess($request)) {
            abort(403);
        }

        if ($this->isInvalidStep($request)) {
            return false;
        }

        if ($this->isMismatchedStep($request)) {
            return false;
        }

        return true;
    }

    private function isWelcomeStep(Request $request): bool
    {
        return $this->installation->step === 0 && $request->getRequestUri() === '/installation';
    }

    private function isRedirectToWelcome(Request $request): bool
    {
        return $this->installation->step === 0 && ($request->getRequestUri() !== '/installation' && $request->method() !== 'POST');
    }

    private function isInvalidAccess(Request $request): bool
    {
        return $this->installation->step > 0 && $request->ip() !== $this->installation->user_ip;
    }

    private function isInvalidStep(Request $request): bool
    {
        return !$this->isValidStep($request) && $this->isInvalidRequest($request);
    }

    private function isMismatchedStep(Request $request): bool
    {
        return $this->getCurrentStep($request) !== $this->installation->step && $this->isInvalidRequest($request);
    }

    private function isValidStep(Request $request): bool
    {
        return filter_var($this->getCurrentStep($request), FILTER_VALIDATE_INT); // Validate if the step is an integer
    }

    private function isInvalidRequest(Request $request): bool
    {
        return $request->method() !== 'POST' || $request->is('restart-installation');
    }

    private function getCurrentStep(Request $request): int
    {
        return (int) Str::after($request->path(), 'step/');
    }

    private function redirectToStep(int $step): RedirectResponse
    {
        return to_route('installation.show-step', $step);
    }

    protected function redirectIfNotCompleted(): RedirectResponse
    {
        if ($this->installation->step === 0) {
            return to_route('installation.index');
        }

        return $this->redirectToStep($this->installation->step ?? 0);
    }

    private function redirectToWelcomeIfInstalled(Request $request, Closure $next)
    {
        if ($request->is('installation*')) {
            return to_route('welcome');
        }

        return $next($request);
    }
}
