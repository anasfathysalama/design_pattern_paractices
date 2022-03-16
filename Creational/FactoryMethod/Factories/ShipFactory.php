<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Transport;
use Creational\FactoryMethod\TransportFactoryMethod;
use Creational\FactoryMethod\TransportTypes\Ship;

class ShipFactory implements TransportFactoryMethod
{

    public function createTransport(): Transport
    {
        return new Ship();
    }
}