<?php

use App\Flyweight\CarStoreFlyweight;
use App\Flyweight\Component\Car;
use App\Flyweight\Component\ColorEnum;

require_once 'autoloader.php';

$carStore = new CarStoreFlyweight;

$chevette1 = new Car(
    'ABC123',
    $carStore->getCharacteristics('Chevrolet', 'Chevette', ColorEnum::BLUE)
);

$chevette2 = new Car(
    'XYZ123',
    $carStore->getCharacteristics('Chevrolet', 'Chevette', ColorEnum::BLUE)
);

if ($chevette1->getCharacteristic() === $chevette2->getCharacteristic()) {
    dump('$chevette1->getCharacteristics() is literally the same object as $chevette2->getCharacteristics()');
}