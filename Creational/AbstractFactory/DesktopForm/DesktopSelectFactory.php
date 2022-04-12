<?php

namespace Creational\AbstractFactory\DesktopForm;

use Creational\AbstractFactory\AbstractSelectFactory;

class DesktopSelectFactory extends AbstractSelectFactory
{

    public function selectOption(): void
    {
        echo "Option Selected Is {$this->getLabelName()}";
    }
}