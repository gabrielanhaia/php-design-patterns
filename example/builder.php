<?php

use App\Builder\DirectDebitPaymentMethodBuilder;
use App\Builder\PaymentMethodDirector;

require_once 'autoloader.php';

$paymentMethodBuilderConcreteImplementation = new DirectDebitPaymentMethodBuilder();
$paymentMethodDirector = new PaymentMethodDirector($paymentMethodBuilderConcreteImplementation);

$paymentMethod = $paymentMethodDirector->buildPaymentMethod();

dump($paymentMethod);