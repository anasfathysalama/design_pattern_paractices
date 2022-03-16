<?php

namespace Creational\Builder\Computer\ComputerParts;

class Keyboard
{

    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }


}