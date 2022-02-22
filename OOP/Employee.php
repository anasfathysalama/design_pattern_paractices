<?php

namespace OOP;

class Employee
{
     private int $salary ;
     private string $name ;

    /**
     * @param int $salary
     * @param string $name
     */
    public function __construct(int $salary, string $name)
    {
        $this->salary = $salary;
        $this->name = $name;
    }
}