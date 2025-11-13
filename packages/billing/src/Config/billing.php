<?php

return [
    'webhook_secret' => env('STRIPE_WEBHOOK_SECRET', ''),
    'plans' => [
        // 'pro' => ['price_id' => 'price_123', 'seats' => 1],
    ],
];
