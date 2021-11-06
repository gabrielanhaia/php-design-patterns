<?php

namespace App\Decorator;

abstract class CharacterDecorator extends Character
{
    protected Character $character;

    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    public function getName(): string
    {
        return $this->character->getName();
    }

    public function getTotalStrength(): int
    {
        return $this->character->getTotalStrength() + $this->totalStrength;
    }

    public function getTotalIntelligence(): int
    {
        return $this->character->getTotalIntelligence() + $this->totalIntelligence;
    }
    public function getTotalAgility(): int
    {
        return $this->character->getTotalAgility() + $this->totalAgility;
    }
    public function getTotalDexterity(): int
    {
        return $this->character->getTotalDexterity() + $this->totalDexterity;
    }

    public function getTotalLuck(): int
    {
        return $this->character->getTotalLuck() + $this->totalLuck;
    }
}