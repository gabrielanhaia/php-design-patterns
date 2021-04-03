<?php


namespace App\Strategy;

use App\Strategy\Component\Product;

class TaxFreeStrategy implements TaxCalculatorStrategy
{

    public function calculate(Product $product): float
    {
        // TODO: Implement calculate() method.
    }
}