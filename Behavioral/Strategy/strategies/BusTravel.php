<?php

namespace Behavioral\Strategy\strategies;

use Behavioral\Strategy\TravelStrategy;

class BusTravel implements TravelStrategy
{
    
    public function travel(): string
    {
        return "Bus";
    }
}