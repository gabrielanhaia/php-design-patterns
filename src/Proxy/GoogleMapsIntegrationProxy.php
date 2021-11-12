<?php

namespace App\Proxy;

use App\Proxy\Component\Address;

class GoogleMapsIntegrationProxy implements GoogleMapsIntegrationSubject
{
    private GoogleMapsIntegrationSubject $originalGoogleMapsIntegration;

    public function __construct(GoogleMapsIntegrationSubject $originalGoogleMapsIntegration)
    {
        $this->originalGoogleMapsIntegration = $originalGoogleMapsIntegration;
    }

    public function getAddressByCoordinates(float $latitude, float $longitude)
    {
        $response = $this->originalGoogleMapsIntegration->getAddressByCoordinates($latitude, $longitude);

        return (new Address)
            ->setCountry($response['country'])
            ->setCounty($response['county'])
            ->setDistrict($response['district'])
            ->setNumber($response['number'])
            ->setPostcode($response['postcode'])
            ->setStreet($response['street']);
    }
}