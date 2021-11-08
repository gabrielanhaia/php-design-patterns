<?php

declare(strict_types=1);

namespace App\FactoryMethod;

use App\Strategy\TaxCalculatorStrategy;

interface CalculatorFactory
{
    public function make(): TaxCalculatorStrategy;
}