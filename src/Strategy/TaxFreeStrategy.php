<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Strategy\Component\Product;

/**
 * Class TaxFreeStrategy
 * @package App\Strategy
 */
class TaxFreeStrategy implements TaxCalculatorStrategy
{
    public function calculate(Product $product): float
    {
        return 0;
    }
}