<?php

namespace OOP\SOLID\OCP;

class PaypalMethod implements PaymentMethodInterface
{

    public function makePayment()
    {
        echo  "paypal";
    }
}