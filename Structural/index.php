<?php

require __DIR__ . '/../vendor/autoload.php';

use Structural\Adapter\Adapters\PaypalAdapter;
use Structural\Adapter\Adapters\StripeAdapter;
use Structural\Adapter\PaypalService;
use Structural\Adapter\StripeService;


/**
 * 
 * Adapter Pattern 
 * 
 * The Adapter Pattern is a structural design pattern that allows objects with incompatible interfaces to work together. It acts as a bridge between two incompatible interfaces,
 *  enabling them to communicate and collaborate effectively. The adapter pattern is particularly useful when integrating third-party libraries or legacy code into a new system without modifying the existing codebase.
 * 
 * 
 */
$stripeService = new StripeService();
$adapter = new StripeAdapter($stripeService);
echo $adapter->pay(100.0);

echo "\n";

$payPalService = new PaypalService();
$paypalAdapter = new PaypalAdapter($payPalService);
echo $paypalAdapter->pay(150.0);

