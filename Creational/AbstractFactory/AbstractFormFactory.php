<?php

namespace Creational\AbstractFactory;

interface AbstractFormFactory
{
    public function createInputFiled(): AbstractInputFactory;

    public function createSelectField(): AbstractSelectFactory;

    public function createSubmitButton(): AbstractButtonFactory;
}