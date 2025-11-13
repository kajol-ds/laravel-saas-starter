<?php

namespace Tests\Feature;

use Tests\TestCase;

class BillingPingTest extends TestCase
{
    /** @test */
    public function billing_ping_endpoint_returns_ok(): void
    {
        $this->get('/api/billing/ping')->assertOk();
    }
}
