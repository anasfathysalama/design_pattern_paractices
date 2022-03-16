<?php

namespace Creational\Builder\Builders;

use Creational\Builder\Computer\Computer;
use Creational\Builder\Computer\ComputerParts\Keyboard;
use Creational\Builder\Computer\ComputerParts\Motherboard;
use Creational\Builder\Computer\ComputerParts\Screen;

abstract class Builder
{
    protected Computer $computer;

    abstract protected function buildMotherboard(): Motherboard;

    abstract protected function buildScreen(): Screen;

    abstract protected function buildKeyboard(): Keyboard;

    abstract public function getComputer(): Computer;
}