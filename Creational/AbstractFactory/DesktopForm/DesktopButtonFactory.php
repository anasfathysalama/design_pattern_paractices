<?php

namespace Creational\AbstractFactory\DesktopForm;

use Creational\AbstractFactory\AbstractButtonFactory;

class DesktopButtonFactory extends AbstractButtonFactory
{

    public function onClick(): void
    {
        echo "Button {$this->getName()} Clicked";
    }
}