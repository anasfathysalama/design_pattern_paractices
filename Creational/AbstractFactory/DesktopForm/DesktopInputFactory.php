<?php

namespace Creational\AbstractFactory\DesktopForm;

use Creational\AbstractFactory\AbstractInputFactory;

class DesktopInputFactory extends AbstractInputFactory
{
    public function validation(): void
    {
        echo "Must Validate {$this->getLabelName()}";
    }
}