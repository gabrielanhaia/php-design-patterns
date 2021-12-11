<?php

use \App\Prototype;

require_once 'autoloader.php';

$bookA = new Prototype\BookA();
$bookA->setAuthorName('Gabriel Anhaia')
    ->setSubject('Technology');

$books = [];
for ($x = 0; $x < 10; $x++) {
    $books = clone $bookA;
}

$bookB = new Prototype\BookB();
$bookB->setAuthorName('Gabriel Anhaia')
    ->setSubject('Technology');

for ($x = 0; $x < 10; $x++) {
    $books = clone $bookB;
}