<?php

namespace App\Proxy;

interface GoogleMapsIntegrationSubject
{
    public function getAddressByCoordinates(float $latitude, float $longitude);
}