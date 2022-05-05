<?php

namespace OOP\SOLID\DIP;

class PaypalPaymentMethod implements PaymentMethodInterface
{

    public function makePayment(): void
    {
        echo  "Paypal Payment";
    }
}