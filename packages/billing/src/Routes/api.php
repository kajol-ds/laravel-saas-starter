<?php

use Illuminate\Support\Facades\Route;
use Budventure\Billing\Http\Controllers\PingController;
use Budventure\Billing\Http\Controllers\WebhookController;

Route::prefix('api')->group(function () {
    Route::get('billing/ping', PingController::class);

    // change THIS line:
    Route::post('billing/webhook', [WebhookController::class, '__invoke']);
});
