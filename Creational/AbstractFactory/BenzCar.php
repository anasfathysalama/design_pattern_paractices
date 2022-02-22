<?php

namespace Creational\AbstractFactory;

class BenzCar implements CarInterface
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return "This is BenzCar Price => " . $this->price ;
    }
}