<?php

declare(strict_types=1);

namespace App\FactoryMethod;

use App\Strategy\TaxCalculatorStrategy;

/**
 * Interface CalculatorFactory
 * @package App\FactoryMethod
 */
interface CalculatorFactory
{
    public function make(): TaxCalculatorStrategy;
}