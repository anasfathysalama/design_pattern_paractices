<?php

namespace Structural\Adapter;

interface PaymentGatewayInterface
{
    public function pay(float $amount): string;
}