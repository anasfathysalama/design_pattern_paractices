<?php

namespace Creational\Builder\Computer\ComputerRepresentations;

use Creational\Builder\Computer\Computer;

class ComputerXl extends Computer
{


    public function turnOn(): bool
    {
        // some logic
        return true;
    }

    public function turnOff(): bool
    {
        // some logic
        return true;
    }

    public function haveGraphicCard(): bool
    {
        // some logic.
        return true;
    }


}