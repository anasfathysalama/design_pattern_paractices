<?php

require __DIR__ . '/../vendor/autoload.php';

use Structural\Adapter\Adapters\PaypalAdapter;
use Structural\Adapter\Adapters\StripeAdapter;
use Structural\Adapter\PaypalService;
use Structural\Adapter\StripeService;

$stripeService = new StripeService();
$adapter = new StripeAdapter($stripeService);
echo $adapter->pay(100.0);

echo "\n";

$payPalService = new PaypalService();
$paypalAdapter = new PaypalAdapter($payPalService);
echo $paypalAdapter->pay(150.0);

