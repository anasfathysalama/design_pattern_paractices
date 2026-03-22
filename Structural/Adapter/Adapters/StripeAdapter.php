<?php

namespace Structural\Adapter\Adapters;

use Structural\Adapter\PaymentGatewayInterface;
use Structural\Adapter\StripeService;

class StripeAdapter implements PaymentGatewayInterface
{
    private StripeService $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function pay(float $amount): string
    {
        $this->stripeService->processPayment($amount);

        return "payment done using stripe service for amount: $amount";
    }
}
