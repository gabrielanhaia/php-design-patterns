<?php

namespace App\Prototype;

class BookA extends BookPrototype
{
    public function __construct()
    {
        $this->setSubject('Book A');
    }

    public function __clone()
    {
        echo 'Book A cloned';ln();
    }
}