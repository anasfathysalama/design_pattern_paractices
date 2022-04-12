<?php

namespace Creational\AbstractFactory\WebForm;

use Creational\AbstractFactory\AbstractSelectFactory;

class WebSelectFactory extends AbstractSelectFactory
{

    public function selectOption(): void
    {
        echo "Option Selected Is {$this->getLabelName()}";
    }
}