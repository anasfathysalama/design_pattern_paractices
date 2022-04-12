<?php

namespace Creational\AbstractFactory;

abstract class AbstractSelectFactory
{
    public string $labelName;
    public array $options;

    /**
     * @param string $labelName
     * @param array $options
     */
    public function __construct(string $labelName, array $options)
    {
        $this->labelName = $labelName;
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getLabelName(): string
    {
        return $this->labelName;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    abstract public function selectOption(): void;
}