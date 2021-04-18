<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Adapter\Component\UserScore;

/**
 * Interface ScoreIntegrationTarget
 * @package App\Adapter
 */
interface ScoreIntegrationTarget
{
    public function getUserScore(string $uuid): UserScore;
}