<?php

namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BmwCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function test_create_bmw_car()
    {
        $createFactory = new CarAbstractFactory(2000);
        $bmwCar = $createFactory->createBmwCar();
        $this->assertInstanceOf(BmwCar::class, $bmwCar);
    }


    public function test_create_benz_car()
    {
        $createFactory = new CarAbstractFactory(12000);
        $benzCar = $createFactory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class, $benzCar);
    }

}