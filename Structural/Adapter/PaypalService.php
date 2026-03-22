<?php

namespace Structural\Adapter;

class PaypalService
{
    public function pay(float $amount): array
    {
        // Simulate processing payment with Paypal
        return [
            'status' => 'success',
            'amount' => $amount
        ];
    }
}
