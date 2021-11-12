<?php

namespace App\Proxy\Component;

class Address
{
    private string $street;

    private string $number;

    private string $district;

    private string $county;

    private string $country;

    private string $postcode;

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return Address
     */
    public function setNumber(string $number): Address
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @param string $district
     * @return Address
     */
    public function setDistrict(string $district): Address
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return string
     */
    public function getCounty(): string
    {
        return $this->county;
    }

    /**
     * @param string $county
     * @return Address
     */
    public function setCounty(string $county): Address
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return Address
     */
    public function setPostcode(string $postcode): Address
    {
        $this->postcode = $postcode;
        return $this;
    }
}