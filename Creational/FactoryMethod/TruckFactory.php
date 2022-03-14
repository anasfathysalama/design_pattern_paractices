<?php

namespace Creational\FactoryMethod;

class TruckFactory implements TransportFactoryMethod
{

    public function createTransport(): Transport
    {
        return new Truck();
    }
}