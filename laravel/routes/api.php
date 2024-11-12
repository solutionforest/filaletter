<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Sendportal\Base\Facades\Sendportal;
use SolutionForest\FilamentNewsletter\Middleware\Authentication;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::middleware([
//     config('filament-newsletter.api.throttle_middleware') ?? 'throttle:60,1',
//     Authentication::class,
// ])->group(function () {
//     // Authenticated API routes (workspace-level authentication).
//     Sendportal::apiRoutes();
// });