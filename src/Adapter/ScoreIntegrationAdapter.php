<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Adapter\Component\UserScore;

/**
 * Class IntegrationAdapter
 * @package App\Adapter
 */
class ScoreIntegrationAdapter implements ScoreIntegrationTarget
{
    /**
     * @var OldIntegration
     */
    private OldIntegration $oldIntegration;

    public function __construct(OldIntegration $oldIntegration)
    {
        $this->oldIntegration = $oldIntegration;
    }

    public function getUserScore(string $uuid): UserScore
    {
        $rawUser = $this->oldIntegration->getScore($uuid);

        $formattedUser = new UserScore(
            $rawUser['uuid'],
            $rawUser['name'],
            $rawUser['response']
        );

        return $formattedUser;
    }
}