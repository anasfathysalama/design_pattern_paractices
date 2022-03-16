<?php

namespace Creational\FactoryMethod\TransportTypes;

use Creational\FactoryMethod\Transport;

class Plan implements Transport
{

    public function deliver(): string
    {
        return "Delivery By Plan";
    }
}