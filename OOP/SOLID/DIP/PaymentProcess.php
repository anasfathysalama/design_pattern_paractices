<?php

namespace OOP\SOLID\DIP;

class PaymentProcess
{
    protected PaymentMethodInterface $paymentMethod;

    /**
     * @param $paymentMethod
     */
    public function __construct(PaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function pay()
    {
        $this->paymentMethod->makePayment();
    }
}