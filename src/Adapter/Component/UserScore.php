<?php

declare(strict_types=1);

namespace App\Adapter\Component;

/**
 * Class User
 * @package App\Adapter\Component
 */
class UserScore
{
    private string $uuid;
    private string $name;
    private float $score;

    public function __construct(string $uuid, string $name, float $score)
    {
        $this->uuid = $uuid;
        $this->name = $name;
        $this->score = $score;
    }

    /**
     * @param string $uuid
     * @return UserScore
     */
    public function setUuid(string $uuid): UserScore
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @param string $name
     * @return UserScore
     */
    public function setName(string $name): UserScore
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }

    /**
     * @param float $score
     * @return UserScore
     */
    public function setScore(float $score): UserScore
    {
        $this->score = $score;
        return $this;
    }
}