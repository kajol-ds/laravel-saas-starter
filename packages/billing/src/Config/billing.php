<?php

return [
    'webhook_secret' => env('STRIPE_WEBHOOK_SECRET', ''),
    'verify_webhook' => env('BILLING_VERIFY_WEBHOOK', true),
    'plans' => [
        // 'pro' => ['price_id' => 'price_123', 'seats' => 1],
    ],
];
