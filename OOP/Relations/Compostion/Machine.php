<?php

namespace OOP\Relations\Compostion;

class Machine
{

    private CPU $cpu;
    private Ram $ram;

    /**
     * @param CPU $cpu
     * @param Ram $ram
     */
    public function __construct(CPU $cpu, Ram $ram)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
    }

    public function displayMachineInfo(): string
    {
        return "Ram is => {$this->ram->getSize()} , CPU is => {$this->cpu->getSpeed()}";
    }
}