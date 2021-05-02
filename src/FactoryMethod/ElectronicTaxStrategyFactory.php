<?php

declare(strict_types=1);

namespace App\FactoryMethod;

use App\Strategy\ElectronicTaxStrategy;
use App\Strategy\TaxCalculatorStrategy;

/**
 * Class ElectronicTaxStrategyFactory
 * @package App\FactoryMethod
 */
class ElectronicTaxStrategyFactory implements CalculatorFactory
{
    public function make(): TaxCalculatorStrategy
    {
        return new ElectronicTaxStrategy();
    }
}