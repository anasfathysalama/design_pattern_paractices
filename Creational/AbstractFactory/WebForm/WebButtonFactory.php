<?php

namespace Creational\AbstractFactory\WebForm;

use Creational\AbstractFactory\AbstractButtonFactory;

class WebButtonFactory extends AbstractButtonFactory
{

    public function onClick(): void
    {
        echo "Button {$this->getName()} Clicked";
    }
}