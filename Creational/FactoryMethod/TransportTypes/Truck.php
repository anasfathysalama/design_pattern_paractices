<?php

namespace Creational\FactoryMethod\TransportTypes;

use Creational\FactoryMethod\Transport;

class Truck implements Transport
{

    public function deliver(): string
    {
        return "Deliver By Truck";
    }
}