<?php


namespace Structural\Adapter\Adapters;

use Structural\Adapter\PaymentGatewayInterface;
use Structural\Adapter\PaypalService;

class PaypalAdapter implements PaymentGatewayInterface
{

    private PaypalService $paypalService;

    public function __construct(PaypalService $paypalService)
    {
        $this->paypalService = $paypalService;
    }

    public function pay(float $amount): string
    {
        $result = $this->paypalService->pay($amount);

        return $result['status'] === 'success' ? 'Payment successful using Paypal' : 'Payment failed using Paypal';
    }
}
