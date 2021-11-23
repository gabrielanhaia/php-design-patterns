<?php

namespace App\Flyweight;

use App\Flyweight\Component\Characteristic;
use App\Flyweight\Component\ColorEnum;

class CarStoreFlyweight
{
    /** @var array|Characteristic[] */
    private array $characteristics = [];

    public function getCharacteristics(string $brand, string $model, ColorEnum $colorEnum): Characteristic
    {
        $characteristicHash = $this->getCharacteristicKey($brand, $model, $colorEnum);
        if (!isset($this->characteristics[$characteristicHash])) {
            $this->characteristics[$characteristicHash] = new Characteristic($brand, $model, $colorEnum);
        }

        return $this->characteristics[$characteristicHash];
    }

    public function getCharacteristicKey(string $brand, string $model, ColorEnum $colorEnum)
    {
        return base64_decode($brand . $model . $colorEnum->name);
    }
}