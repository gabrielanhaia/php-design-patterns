<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Strategy\Component\Product;

/**
 * Interface TaxCalculatorStrategy
 * @package App\Strategy
 */
interface TaxCalculatorStrategy
{
    /**
     * @param Product $product
     * @return float
     */
    public function calculate(Product $product): float;
}