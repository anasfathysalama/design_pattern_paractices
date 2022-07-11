<?php

namespace Behavioral\Strategy\strategies;

use Behavioral\Strategy\TravelStrategy;

class WalkTravel implements TravelStrategy
{

    public function travel()
    {
        return  "Walk";
    }
}