<?php

namespace Behavioral\Strategy\strategies;

use Behavioral\Strategy\TravelStrategy;

class CarTravel implements TravelStrategy
{

    public function travel(): string
    {
        return "Car";
    }
}