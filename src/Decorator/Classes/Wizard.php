<?php

namespace App\Decorator\Classes;

use App\Decorator\Character;

class Wizard extends Character
{
    public function __construct()
    {
        $this->name = 'Wizard';
        $this->totalStrength = 8;
        $this->totalAgility = 15;
        $this->totalDexterity = 16;
        $this->totalIntelligence = 20;
        $this->totalLuck = 25;
    }
}