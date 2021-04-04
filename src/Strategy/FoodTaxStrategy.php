<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Strategy\Component\Product;

class FoodTaxStrategy implements TaxCalculatorStrategy
{
    const TAX_RATE = 30.0;

    /**
     * @param Product $product
     * @return float
     */
    public function calculate(Product $product): float
    {
        return $product->getPrice() * (self::TAX_RATE / 100);
    }
}