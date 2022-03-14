<?php

namespace Creational\FactoryMethod;

class Plan implements Transport
{

    public function deliver(): string
    {
        return "Delivery By Plan";
    }
}