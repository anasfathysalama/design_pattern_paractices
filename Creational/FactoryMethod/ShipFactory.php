<?php

namespace Creational\FactoryMethod;

class ShipFactory implements TransportFactoryMethod
{

    public function createTransport(): Transport
    {
        return new Ship();
    }
}