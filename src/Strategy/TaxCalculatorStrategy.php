<?php

namespace App\Strategy;

use App\Strategy\Component\Product;

interface TaxCalculatorStrategy
{
    public function calculate(Product $product): float;
}