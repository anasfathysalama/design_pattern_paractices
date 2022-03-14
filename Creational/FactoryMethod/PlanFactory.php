<?php

namespace Creational\FactoryMethod;

class PlanFactory implements TransportFactoryMethod
{

    public function createTransport(): Transport
    {
        return new Plan();
    }
}