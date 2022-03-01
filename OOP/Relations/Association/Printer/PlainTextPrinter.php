<?php

namespace OOP\Relations\Association\Printer;

class PlainTextPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "Welcome From Plain Text Printer {$this->printText}";
    }
}