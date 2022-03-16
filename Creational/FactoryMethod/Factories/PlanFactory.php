<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Transport;
use Creational\FactoryMethod\TransportFactoryMethod;
use Creational\FactoryMethod\TransportTypes\Plan;

class PlanFactory implements TransportFactoryMethod
{

    public function createTransport(): Transport
    {
        return new Plan();
    }
}