<?php

use App\Money\Currency;
use App\Money\Money;

require_once 'autoloader.php';

$firstAmount = new Money(120, Currency::EUR());
$secondAmount = new Money(150, Currency::EUR());

$isEqualTo = $firstAmount->isEqualTo($secondAmount) ? 'YES' : 'NO';
$isGreaterThan = $firstAmount->isGreaterThan($secondAmount) ? 'YES' : 'NO';
$isLowerThan = $firstAmount->isLowerThan($secondAmount) ? 'YES' : 'NO';

lns();ln();
echo '$firstAmount->isEqualTo(): ' . $isEqualTo . " ({$firstAmount} === {$secondAmount})";
ln();
echo '$firstAmount->isGreaterThan(): ' . $isGreaterThan . " ({$firstAmount} > {$secondAmount})";
ln();
echo '$firstAmount->isLowerThan(): ' . $isLowerThan . " ({$firstAmount} < {$secondAmount})";
ln();
