<?php
require __DIR__ . '/../vendor/autoload.php';

use Creational\FactoryMethod\PlanFactory;
use Creational\FactoryMethod\ShipFactory;
use Creational\FactoryMethod\TruckFactory;

$shipFactory = new ShipFactory();
$ship = $shipFactory->createTransport();
echo $ship->deliver();

echo "<br>";

$truckFactory = new TruckFactory();
$truck = $truckFactory->createTransport();
echo $truck->deliver();

echo "<br>";

$planFactory = new PlanFactory();
$plan = $planFactory->createTransport();
echo $plan->deliver();