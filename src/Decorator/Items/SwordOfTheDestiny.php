<?php

namespace App\Decorator\Items;

use App\Decorator\Character;
use App\Decorator\CharacterDecorator;

class SwordOfTheDestiny extends CharacterDecorator
{
    public function __construct(Character $character)
    {
        parent::__construct($character);

        $this->totalStrength = 16;
        $this->totalAgility = -5;
    }
}