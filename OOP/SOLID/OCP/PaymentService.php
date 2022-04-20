<?php

namespace OOP\SOLID\OCP;

class PaymentService
{
    protected PaymentMethodInterface $paymentMethod;

    /**
     * @param PaymentMethodInterface $paymentMethod
     */
    public function __construct(PaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @param PaymentMethodInterface $paymentMethod
     */
    public function changePaymentMethod(PaymentMethodInterface $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }


    public function pay()
    {
        $this->paymentMethod->makePayment();
    }

}