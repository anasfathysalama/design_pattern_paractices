<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Transport;
use Creational\FactoryMethod\TransportFactoryMethod;
use Creational\FactoryMethod\TransportTypes\Truck;

class TruckFactory implements TransportFactoryMethod
{

    public function createTransport(): Transport
    {
        return new Truck();
    }
}