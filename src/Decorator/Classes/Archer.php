<?php

namespace App\Decorator\Classes;

use App\Decorator\Character;

class Archer extends Character
{
    public function __construct()
    {
        $this->name = 'Archer';
        $this->totalStrength = 10;
        $this->totalAgility = 27;
        $this->totalDexterity = 20;
        $this->totalIntelligence = 15;
        $this->totalLuck = 15;
    }
}