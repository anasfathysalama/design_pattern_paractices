<?php

namespace Creational\AbstractFactory;

class BmwCar implements CarInterface
{
    private $price;
    private $tax;

    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->$tax = $tax;
    }

    public function calculatePrice()
    {
        return "This is BmwCar Price => " . ($this->price * $this->tax + 100);
    }
}