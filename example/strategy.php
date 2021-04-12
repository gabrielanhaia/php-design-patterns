<?php

use App\Strategy\FoodTaxStrategy;
use App\Strategy\Component\Product;
use App\Strategy\Context;
use App\Strategy\TaxFreeStrategy;
use App\Strategy\ElectronicTaxStrategy;

require_once 'autoloader.php';

$product = new Product;
$product->setName('Product Test')
    ->setCategory('electronics')
    ->setPrice(100);

switch ($product->getCategory()) {
    case 'electronics':
        $strategy = new ElectronicTaxStrategy;
        break;
    case 'food':
        $strategy = new FoodTaxStrategy;
        break;
    case 'books':
        $strategy = new TaxFreeStrategy;
        break;
    default:
        throw new \Exception('Strategy not found for this category.');
}

$context = new Context($strategy);
$context->calculateProduct($product);

echo $product->getTaxes();
