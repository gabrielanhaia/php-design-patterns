<?php

namespace App\Flyweight\Component;

class Characteristic
{
    private string $brand;

    private string $model;

    private ColorEnum $color;

    /**
     * @param string $brand
     * @param string $model
     * @param ColorEnum $color
     */
    public function __construct(string $brand, string $model, ColorEnum $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return Characteristic
     */
    public function setBrand(string $brand): Characteristic
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return Characteristic
     */
    public function setModel(string $model): Characteristic
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return ColorEnum
     */
    public function getColor(): ColorEnum
    {
        return $this->color;
    }

    /**
     * @param ColorEnum $color
     * @return Characteristic
     */
    public function setColor(ColorEnum $color): Characteristic
    {
        $this->color = $color;
        return $this;
    }
}