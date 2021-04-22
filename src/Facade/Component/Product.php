<?php

namespace App\Facade\Component;

final class Product
{
    protected string $uuid;

    protected string $name;

    protected int $barCode;

    protected int $stock = 0;

    protected float $price;

    protected bool $isOnMarketplace = false;

    /**
     * @return bool
     */
    public function isOnMarketplace(): bool
    {
        return $this->isOnMarketplace;
    }

    /**
     * @param bool $isOnMarketplace
     * @return Product
     */
    public function setIsOnMarketplace(bool $isOnMarketplace): Product
    {
        $this->isOnMarketplace = $isOnMarketplace;
        return $this;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return Product
     */
    public function setUuid(string $uuid): Product
    {
        $this->uuid = $uuid;
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
     * @return int
     */
    public function getBarCode(): int
    {
        return $this->barCode;
    }

    /**
     * @param int $barCode
     * @return Product
     */
    public function setBarCode(int $barCode): Product
    {
        $this->barCode = $barCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     * @return Product
     */
    public function setStock(int $stock): Product
    {
        $this->stock = $stock;
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
}