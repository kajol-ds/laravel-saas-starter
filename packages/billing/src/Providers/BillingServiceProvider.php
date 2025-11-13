<?php

namespace Budventure\Billing\Providers;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // config merge point (later we'll add real config)
        $this->mergeConfigFrom(__DIR__ . '/../Config/billing.php', 'billing');
    }

    public function boot(): void
    {
        // publish config
        $this->publishes([
            __DIR__ . '/../Config/billing.php' => config_path('billing.php'),
        ], 'billing-config');

        // load package routes
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
    }
}
