<?php

require __DIR__ . '/../vendor/autoload.php';

use Behavioral\Observer\ConcreteClassA;
use Behavioral\Observer\ConcreteClassB;
use Behavioral\Observer\Subject;
use Behavioral\Strategy\strategies\BusTravel;
use Behavioral\Strategy\strategies\CarTravel;
use Behavioral\Strategy\strategies\PlanTravel;
use Behavioral\Strategy\TripContext;



/* Start Implementation Of Strategy Pattern */
//$trip = new TripContext(new BusTravel());      #  concrete class is  BusTravel
//$trip->confirmTrip();
//
//echo "<br><br>";
//$trip->setTravelStrategy(new PlanTravel());  # change the strategy type of context class to plan at run time
//$trip->confirmTrip();
//
//echo "<br><br>";
//$trip->setTravelStrategy(new CarTravel());  # change the strategy type of context class to car at run time
//$trip->confirmTrip();
/* End Implementation Of Strategy Pattern  */


/* Start Implementation Of Observer Pattern  */

$subject = new Subject();

$o1 = new ConcreteClassA();
$subject->attach($o1);

$o2 = new ConcreteClassB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();

/* End Implementation Of Observer Pattern  */

