<?php

namespace Behavioral\Strategy\strategies;

use Behavioral\Strategy\TravelStrategy;

class PlanTravel implements TravelStrategy
{

    public function travel(): string
    {
        return "Plan";
    }
}