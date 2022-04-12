<?php

namespace Creational\AbstractFactory\WebForm;

use Creational\AbstractFactory\AbstractButtonFactory;
use Creational\AbstractFactory\AbstractFormFactory;
use Creational\AbstractFactory\AbstractInputFactory;
use Creational\AbstractFactory\AbstractSelectFactory;

class WebFormFactory implements AbstractFormFactory
{

    public function createInputFiled(): AbstractInputFactory
    {
        return new WebInputFactory("Full Name", "Enter Your Name");
    }

    public function createSelectField(): AbstractSelectFactory
    {
        return new WebSelectFactory("Gender", ['male', 'female']);
    }

    public function createSubmitButton(): AbstractButtonFactory
    {
        return new WebButtonFactory("Submit", 'submit');
    }
}