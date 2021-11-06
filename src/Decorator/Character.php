<?php

namespace App\Decorator;

abstract class Character
{
    protected string $name;

    protected int $totalStrength = 0;

    protected int $totalIntelligence = 0;

    protected int $totalAgility = 0;

    protected int $totalDexterity = 0;

    protected int $totalLuck = 0;

    public function getName(): string
    {
        return $this->name;
    }

    public function getTotalStrength(): int
    {
        return $this->totalStrength;
    }

    public function getTotalIntelligence(): int
    {
        return $this->totalIntelligence;
    }

    public function getTotalAgility(): int
    {
        return $this->totalAgility;
    }


    public function getTotalDexterity(): int
    {
        return $this->totalDexterity;
    }

    public function getTotalLuck(): int
    {
        return $this->totalLuck;
    }
}