<?php

use App\FactoryMethod;
use App\Strategy\Component\Product;

require_once 'autoloader.php';

$factoryMethod1 = new FactoryMethod\ElectronicTaxStrategyFactory();
$factoryMethod2 = new FactoryMethod\FoodTaxStrategyFactory();
$factoryMethod3 = new FactoryMethod\TaxFreeStrategyFactory();

$product = new Product();
$product->setName("Test Product")
    ->setCategory("Test Category")
    ->setPrice(100);

lns();ln();
echo $factoryMethod1->make()->calculate($product);
ln();
echo $factoryMethod2->make()->calculate($product);
ln();
echo $factoryMethod3->make()->calculate($product);
ln();
lns();