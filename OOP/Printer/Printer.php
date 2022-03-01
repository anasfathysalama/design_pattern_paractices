<?php

namespace OOP\Printer;


abstract class Printer
{
    public string $printText;

    /**
     * @param string $printText
     */
    public function setPrintText(string $printText): void
    {
        $this->printText = $printText;
    }

    abstract public function printToScreen(): string;
}