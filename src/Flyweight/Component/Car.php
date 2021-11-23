<?php

namespace App\Flyweight\Component;

class Car
{
    private string $serialNumber;

    private Characteristic $characteristic;

    /**
     * @param string $serialNumber
     * @param Characteristic $characteristic
     */
    public function __construct(string $serialNumber, Characteristic $characteristic)
    {
        $this->serialNumber = $serialNumber;
        $this->characteristic = $characteristic;
    }

    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return Car
     */
    public function setSerialNumber(string $serialNumber): Car
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * @return Characteristic
     */
    public function getCharacteristic(): Characteristic
    {
        return $this->characteristic;
    }

    /**
     * @param Characteristic $characteristic
     * @return Car
     */
    public function setCharacteristic(Characteristic $characteristic): Car
    {
        $this->characteristic = $characteristic;
        return $this;
    }
}