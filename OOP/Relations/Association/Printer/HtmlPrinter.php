<?php

namespace OOP\Relations\Association\Printer;

class HtmlPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "<h1>Welcome From Html Printer {$this->printText} </h1>";
    }
}