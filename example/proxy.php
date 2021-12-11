<?php

use App\Proxy\GoogleMapsIntegration;
use App\Proxy\GoogleMapsIntegrationProxy;

require_once 'autoloader.php';

lns();
ln();
$googleMapsIntegrationOriginalClass = new GoogleMapsIntegration();
$address = $googleMapsIntegrationOriginalClass->getAddressByCoordinates(1234, 5678);
dump($address);

$googleMapsIntegrationProxy = new GoogleMapsIntegrationProxy($googleMapsIntegrationOriginalClass);
$addressFromProxy = $googleMapsIntegrationProxy->getAddressByCoordinates(1234, 5678);
dump($addressFromProxy);

/**
    Note: The Proxy pattern is much more powerful.
    You can even use the proxy to manage a Cache layer between the original class, or even add extra validations in this middle layer.
*/