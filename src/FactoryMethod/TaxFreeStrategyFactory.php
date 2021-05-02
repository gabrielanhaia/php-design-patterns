<?php

declare(strict_types=1);

namespace App\FactoryMethod;

use App\Strategy\TaxCalculatorStrategy;
use App\Strategy\TaxFreeStrategy;

/**
 * Class TaxFreeStrategyFactory
 * @package App\FactoryMethod
 */
class TaxFreeStrategyFactory implements CalculatorFactory
{
    public function make(): TaxCalculatorStrategy
    {
        return new TaxFreeStrategy();
    }
}