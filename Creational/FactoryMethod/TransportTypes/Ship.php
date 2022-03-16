<?php

namespace Creational\FactoryMethod\TransportTypes;

use Creational\FactoryMethod\Transport;

class Ship implements Transport
{

    public function deliver(): string
    {
        return "Deliver By Ship";
    }
}