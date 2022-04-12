<?php

namespace Creational\AbstractFactory\DesktopForm;

use Creational\AbstractFactory\AbstractButtonFactory;
use Creational\AbstractFactory\AbstractFormFactory;
use Creational\AbstractFactory\AbstractInputFactory;
use Creational\AbstractFactory\AbstractSelectFactory;

class DesktopFormFactory implements AbstractFormFactory
{

    public function createInputFiled(): AbstractInputFactory
    {
        return new DesktopInputFactory("Desktop Full Name", "Enter Your Name");
    }

    public function createSelectField(): AbstractSelectFactory
    {
        return new DesktopSelectFactory("Desktop Gender", ['male', 'female']);
    }

    public function createSubmitButton(): AbstractButtonFactory
    {
        return new DesktopButtonFactory("Submit", 'desktop submit');
    }
}