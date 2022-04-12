<?php

namespace Creational\AbstractFactory;

abstract class AbstractInputFactory
{
    public string $labelName;
    public string $placeholder;

    /**
     * @param string $labelName
     * @param string $placeholder
     */
    public function __construct(string $labelName, string $placeholder)
    {
        $this->labelName = $labelName;
        $this->placeholder = $placeholder;
    }

    /**
     * @return string
     */
    public function getLabelName(): string
    {
        return $this->labelName;
    }

    /**
     * @return string
     */
    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    abstract public function validation(): void;
}