<?php

declare(strict_types=1);

namespace App\FactoryMethod;

use App\Strategy\FoodTaxStrategy;
use App\Strategy\TaxCalculatorStrategy;

/**
 * Class FoodTaxStrategyFactory
 * @package App\FactoryMethod
 */
class FoodTaxStrategyFactory implements CalculatorFactory
{
    public function make(): TaxCalculatorStrategy
    {
        return new FoodTaxStrategy();
    }
}