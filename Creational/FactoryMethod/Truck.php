<?php

namespace Creational\FactoryMethod;

class Truck implements Transport
{

    public function deliver(): string
    {
        return "Deliver By Truck";
    }
}