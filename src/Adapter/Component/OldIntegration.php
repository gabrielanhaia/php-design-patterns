<?php

namespace App\Adapter\Component;

/**
 * Class OldIntegration
 * @package App\Adapter\Component
 */
class OldIntegration
{
    public function getAllUsers()
    {
        // Request the data from the external API.
        return [
            [
                'uuid' => '7de2a62e-7628-4d2f-a02b-fe395c5ce85b',
                'name' => 'Gabriel Anhaia',
            ],
            [
                'uuid' => '7de2a62e-7628-4d2f-a02b-fe395c5ce85b',
                'name' => 'Brian Park',
            ],
            [
                'uuid' => '41e72c66-1998-4ea5-9ce8-12eef91e267d',
                'name' => 'Roderick Mcbride'
            ]
        ];
    }
}