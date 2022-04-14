<?php
require __DIR__ . '/../vendor/autoload.php';


use Creational\AbstractFactory\DesktopForm\DesktopFormFactory;
use Creational\AbstractFactory\RenderForm;
use Creational\AbstractFactory\WebForm\WebFormFactory;
use Creational\Builder\Builders\ComputerSimpleBuilder;
use Creational\Builder\Director;
use Creational\Builder\Builders\ComputerXlBuilder;
use Creational\Singleton\Application;


###############  Builder Pattern Implementation #############################

//$director = new Director(new ComputerXlBuilder());
//$simpleComputer = $director->makeComputer();
//
//$director->changeBuilder(new ComputerSimpleBuilder());
//$xlComputer = $director->makeComputer();
//dump($xlComputer);

###############  end implementation #############################


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

###############  end implementation #############################

###############  Abstract Factory Pattern Implementation #############################
//$form = new  RenderForm(new DesktopFormFactory());
//$form->render();
//echo "<br>";
//$form->changeFactory(new WebFormFactory());
//$form->render();

###############  end implementation #############################

###############  Singleton Pattern Implementation #############################
$instanceOne = Application::getInstance();
$instanceTwo = Application::getInstance();
if ($instanceOne === $instanceTwo) {
    echo "The Two instances are the same";
} else {
    echo "The Two instances not the same";
}
###############  end implementation #############################