<?php

namespace App\Decorator\Items;

use App\Decorator\Character;
use App\Decorator\CharacterDecorator;

class HermesBoots extends CharacterDecorator
{
    public function __construct(Character $character)
    {
        parent::__construct($character);

        $this->totalDexterity = 40;
    }
}