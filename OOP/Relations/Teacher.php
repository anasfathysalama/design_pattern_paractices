<?php

namespace OOP\Relations;

use OOP\Printer\Printer;

class Teacher
{
    private string $name;


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayWelcome(Printer $printer): string
    {
        $printer->setPrintText($this->name);
        return $printer->printToScreen();
    }

}