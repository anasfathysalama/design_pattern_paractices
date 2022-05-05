<?php

namespace OOP\SOLID\DIP;

class StripePaymentMethod implements PaymentMethodInterface
{
    public function makePayment(): void
    {
        echo "Stripe Payment";
    }
}