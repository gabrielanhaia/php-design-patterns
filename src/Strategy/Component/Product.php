<?php

declare(strict_types=1);

namespace App\Strategy\Component;

/**
 * Class Product
 * @package App\Strategy\Component
 */
class Product
{
    private string $name;

    private string $category;

    private float $price;

    private float $taxes;

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return Product
     */
    public function setCategory(string $category): Product
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName(string $name): Product
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Product
     */
    public function setPrice(float $price): Product
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxes(): float
    {
        return $this->taxes;
    }

    /**
     * @param float $taxes
     * @return Product
     */
    public function setTaxes(float $taxes): Product
    {
        $this->taxes = $taxes;
        return $this;
    }
}