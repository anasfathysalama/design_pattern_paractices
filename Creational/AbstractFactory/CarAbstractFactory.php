<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{
    private $tax = 1200;
    private $price;


    public function __construct($price)
    {
        $this->price = $price;
    }

    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->price);
    }

    public function createBmwCar(): BmwCar
    {
        return new BmwCar($this->price, $this->tax);
    }
}