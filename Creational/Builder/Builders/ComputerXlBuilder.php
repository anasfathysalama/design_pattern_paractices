<?php

namespace Creational\Builder\Builders;

use Creational\Builder\Computer\Computer;
use Creational\Builder\Computer\ComputerParts\Keyboard;
use Creational\Builder\Computer\ComputerParts\Motherboard;
use Creational\Builder\Computer\ComputerParts\Screen;
use Creational\Builder\Computer\ComputerRepresentations\ComputerXl;

class ComputerXlBuilder extends Builder
{

    protected function buildMotherboard(): Motherboard
    {
        return new Motherboard(16, 5, 2);
    }

    protected function buildScreen(): Screen
    {
        return new Screen(200);
    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard('Mechanical Board');
    }


    public function getComputer(): Computer
    {
        $computer = new ComputerXl();
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMotherboard($this->buildMotherboard());
        $computer->setScreen($this->buildScreen());

        return $computer;
    }
}