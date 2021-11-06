<?php

namespace App\Decorator\Classes;

use App\Decorator\Character;

class Knight extends Character
{
    public function __construct()
    {
        $this->name = 'Knight';
        $this->totalStrength = 26;
        $this->totalAgility = 8;
        $this->totalDexterity = 10;
        $this->totalIntelligence = 10;
        $this->totalLuck = 15;
    }
}