<?php

use Illuminate\Support\Facades\Route;
use Budventure\Billing\Http\Controllers\PingController;

Route::prefix('api')->group(function () {
    Route::get('billing/ping', PingController::class);
});
