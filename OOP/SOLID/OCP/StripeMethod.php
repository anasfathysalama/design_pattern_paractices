<?php

namespace OOP\SOLID\OCP;

class StripeMethod implements PaymentMethodInterface
{

    public function makePayment()
    {
        echo "stripe";
    }
}