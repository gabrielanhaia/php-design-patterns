<?php

use App\Strategy\AnimalTaxStrategy;
use App\Strategy\Component\Product;
use App\Strategy\Context;
use App\Strategy\TaxFreeStrategy;
use App\Strategy\VegetablesTaxStrategy;

require_once 'autoloader.php';


$product = new Product;
$product->setName('Product Test')
    ->setType('vegetable')
    ->setPrice(100);

$strategy = new TaxFreeStrategy;
//$strategy = new VegetablesTaxStrategy;
//$strategy = new AnimalTaxStrategy;
$context = new Context($strategy);

$context->calculateProduct($product);

echo $product->getTaxes();
