<?php

use App\Http\Controllers\Housekeeping\DashboardController;

Route::middleware('housekeeping.access')->prefix('housekeeping')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('housekeeping.dashboard');
});
