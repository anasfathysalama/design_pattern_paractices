<?php

namespace Structural\Adapter;

class StripeService
{
    public function processPayment(float $amount): bool
    {
        // Simulate processing payment with Stripe
        return true;
    }
}
