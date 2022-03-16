<?php

namespace Creational\Builder\Builders;

use Creational\Builder\Computer\Computer;
use Creational\Builder\Computer\ComputerParts\Keyboard;
use Creational\Builder\Computer\ComputerParts\Motherboard;
use Creational\Builder\Computer\ComputerParts\Screen;
use Creational\Builder\Computer\ComputerRepresentations\ComputerSimple;

class ComputerSimpleBuilder extends Builder
{
    protected function buildMotherboard(): Motherboard
    {
        return new Motherboard(4, 2, 1);
    }

    protected function buildScreen(): Screen
    {
        return new Screen(100);
    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard('Simple Board');
    }


    public function getComputer(): Computer
    {
        $computer = new ComputerSimple();
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMotherboard($this->buildMotherboard());
        $computer->setScreen($this->buildScreen());

        return $computer;
    }
}