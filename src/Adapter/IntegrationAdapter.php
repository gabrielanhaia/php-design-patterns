<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Adapter\Component\OldIntegration;
use App\Adapter\Component\User;
use App\Adapter\Component\UserCollection;

/**
 * Class IntegrationAdapter
 * @package App\Adapter
 */
class IntegrationAdapter
{
    /**
     * @var OldIntegration
     */
    private OldIntegration $oldIntegration;

    public function __construct(OldIntegration $oldIntegration)
    {
        $this->oldIntegration = $oldIntegration;
    }

    public function getUsers(): UserCollection
    {
        $rawUsers = $this->oldIntegration->getAllUsers();

        $userCollection = new UserCollection;
        foreach ($rawUsers as $user) {
            $userCollection->add(
                new User($user['uuid'], $user['name'])
            );
        }

        return $userCollection;
    }
}