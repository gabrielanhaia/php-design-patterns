<?php


namespace App\Strategy;

use App\Strategy\Component\Product;

class Context
{
    /**
     * @var TaxCalculatorStrategy
     */
    private TaxCalculatorStrategy $taxCalculatorStrategy;

    /**
     * Context constructor.
     * @param TaxCalculatorStrategy $taxCalculatorStrategy
     */
    public function __construct(TaxCalculatorStrategy $taxCalculatorStrategy)
    {
        $this->taxCalculatorStrategy = $taxCalculatorStrategy;
    }

    public function calculateProduct(Product $product): void
    {
        $taxes = $this->taxCalculatorStrategy->calculate($product);

        $product->setTaxes($taxes);
    }
}