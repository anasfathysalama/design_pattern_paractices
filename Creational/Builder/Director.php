<?php

namespace Creational\Builder;


use Creational\Builder\Builders\Builder;
use Creational\Builder\Computer\Computer;

class Director
{
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    /**
     *
     * @return Computer
     */
    public function makeComputer(): Computer
    {
        return $this->builder->getComputer();
    }
}