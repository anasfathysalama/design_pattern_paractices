<?php

namespace Creational\FactoryMethod;

class Ship implements Transport
{

    public function deliver(): string
    {
        return "Deliver By Ship";
    }
}