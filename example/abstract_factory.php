<?php

use App\AbstractFactory\AmericanOrderFactory;
use App\AbstractFactory\GermanOrderFactory;

require_once 'autoloader.php';

$orderData = '[ORDER 123]';

$americanOrderFactory = new AmericanOrderFactory();
lns();ln();
$americanOrderFactory->createCarrierCompany()->ship($orderData);
ln();
$americanOrderFactory->createPaymentGateway()->pay($orderData);
ln();

// -------------

$germanOrderFactory = new GermanOrderFactory();
lns();ln();
$germanOrderFactory->createCarrierCompany()->ship($orderData);
ln();
$germanOrderFactory->createPaymentGateway()->pay($orderData);