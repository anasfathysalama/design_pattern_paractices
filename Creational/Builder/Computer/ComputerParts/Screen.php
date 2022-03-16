<?php

namespace Creational\Builder\Computer\ComputerParts;

class Screen
{

    private int $resolution;

    /**
     * @param int $resolution
     */
    public function __construct(int $resolution)
    {
        $this->resolution = $resolution;
    }

    /**
     * @return int
     */
    public function getResolution(): int
    {
        return $this->resolution;
    }


}