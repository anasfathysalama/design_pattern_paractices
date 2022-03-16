<?php
require __DIR__ . '/../vendor/autoload.php';



use Creational\Builder\Builders\ComputerSimpleBuilder;
use Creational\Builder\Director;
use Creational\Builder\Builders\ComputerXlBuilder;


###############  Builder Pattern Implementation #############################

$director = new Director(new ComputerXlBuilder());
$simpleComputer = $director->makeComputer();

$director->changeBuilder(new ComputerSimpleBuilder());
$xlComputer = $director->makeComputer();
dump($xlComputer);

###############  Builder Pattern Implementation #############################


###############  Factory Pattern Implementation #############################

//$shipFactory = new ShipFactory();
//$ship = $shipFactory->createTransport();
//echo $ship->deliver();
//
//echo "<br>";
//
//$truckFactory = new TruckFactory();
//$truck = $truckFactory->createTransport();
//echo $truck->deliver();
//
//echo "<br>";
//
//$planFactory = new PlanFactory();
//$plan = $planFactory->createTransport();
//echo $plan->deliver();

###############  Factory Pattern Implementation #############################
