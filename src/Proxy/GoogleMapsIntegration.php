<?php

namespace App\Proxy;

class GoogleMapsIntegration implements GoogleMapsIntegrationSubject
{
    public function getAddressByCoordinates(float $latitude, float $longitude)
    {
        // Complex integration here.

        echo 'Make a real request here and return the address.';

        return [
            'street' => 'Charlottenstrasse',
            'number' => 1234,
            'postcode' => 12345,
            'district' => 'Mitte',
            'county' => 'Berlin',
            'country' => 'Germany'
        ];
    }
}