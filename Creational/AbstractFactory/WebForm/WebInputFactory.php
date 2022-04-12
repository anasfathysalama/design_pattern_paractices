<?php

namespace Creational\AbstractFactory\WebForm;

use Creational\AbstractFactory\AbstractInputFactory;

class WebInputFactory extends AbstractInputFactory
{
    public function validation(): void
    {
        echo "Must Validate {$this->getLabelName()}";
    }
}