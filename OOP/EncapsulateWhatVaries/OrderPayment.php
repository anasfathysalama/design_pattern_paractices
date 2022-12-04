<?php

namespace OOP\EncapsulateWhatVaries;

class OrderPayment
{

    public string $paymentMethod ;
    public PaymentTypes $paymentTypes;

    /**
     * @param PaymentTypes $paymentTypes
     */
    public function setPaymentTypes(PaymentTypes $paymentTypes): void
    {
        $this->paymentTypes = $paymentTypes;
    }

    public function pay($method)
    {
         echo 'method for payment => ' . $this->paymentTypes->createMethod($method) . ' ';
        // other business logic
        return "process is success" ;
    }

}