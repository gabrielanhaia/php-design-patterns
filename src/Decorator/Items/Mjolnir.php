<?php

namespace App\Decorator\Items;

use App\Decorator\Character;
use App\Decorator\CharacterDecorator;

class Mjolnir extends CharacterDecorator
{
    public function __construct(Character $character)
    {
        parent::__construct($character);
        
        $this->totalStrength = 40;
    }
}