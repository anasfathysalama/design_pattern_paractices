<?php

namespace OOP\SOLID\SRP;

class Plan
{

    private Attack $attack;
    private Defense $defense;
    private Keeper $keeper;

    /**
     * @param Attack $attack
     * @param Defense $defense
     * @param Keeper $keeper
     */
    public function __construct(Attack $attack, Defense $defense, Keeper $keeper)
    {
        $this->attack = $attack;
        $this->defense = $defense;
        $this->keeper = $keeper;
    }

    /**
     * @return string
     */
    public function setPlan(): string
    {
        return "
           Attack => {$this->attack}\n
           Defense => {$this->defense}\n
           Keeper => {$this->keeper}\n
        ";
    }

}