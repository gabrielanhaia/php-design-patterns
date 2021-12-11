<?php

namespace App\Prototype;

class BookB extends BookPrototype
{
    public function __construct()
    {
        $this->setSubject('Book B');
    }

    public function __clone()
    {
        echo 'Book B cloned';ln();
    }
}