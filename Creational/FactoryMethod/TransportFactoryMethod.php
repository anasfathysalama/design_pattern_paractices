<?php

namespace Creational\FactoryMethod;

interface TransportFactoryMethod
{
    public function createTransport(): Transport;
}