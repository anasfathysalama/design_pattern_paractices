<?php

namespace Creational\Builder\Computer\ComputerParts;

class Motherboard
{

    private int $ramSize;
    private int $cpuSpeed;
    private int $graphicCardSize;

    /**
     * @param int $ramSize
     * @param int $cpuSpeed
     * @param int $graphicCardSize
     */
    public function __construct(int $ramSize, int $cpuSpeed, int $graphicCardSize)
    {
        $this->ramSize = $ramSize;
        $this->cpuSpeed = $cpuSpeed;
        $this->graphicCardSize = $graphicCardSize;
    }


    /**
     * @return int
     */
    public function getRamSize(): int
    {
        return $this->ramSize;
    }

    /**
     * @return int
     */
    public function getCpuSpeed(): int
    {
        return $this->cpuSpeed;
    }

    /**
     * @return int
     */
    public function getGraphicCardSize(): int
    {
        return $this->graphicCardSize;
    }


}