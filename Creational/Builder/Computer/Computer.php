<?php

namespace Creational\Builder\Computer;


use Creational\Builder\Computer\ComputerParts\Keyboard;
use Creational\Builder\Computer\ComputerParts\Motherboard;
use Creational\Builder\Computer\ComputerParts\Screen;

abstract class Computer
{
    private Screen $screen;
    private Motherboard $motherboard;
    private Keyboard $keyboard;

    abstract public function turnOn(): bool;

    abstract public function turnOff(): bool;


    /**
     * @param Screen $screen
     */
    public function setScreen(Screen $screen): void
    {
        $this->screen = $screen;
    }

    /**
     * @param Motherboard $motherboard
     */
    public function setMotherboard(Motherboard $motherboard): void
    {
        $this->motherboard = $motherboard;
    }

    /**
     * @param Keyboard $keyboard
     */
    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }
}