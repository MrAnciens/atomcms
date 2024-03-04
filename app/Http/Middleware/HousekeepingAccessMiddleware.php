<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HousekeepingAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!hasPermission('housekeeping_access')) {
            abort(403, 'You are not allowed to access the housekeeping panel.');
        }

        return $next($request);
    }
}
