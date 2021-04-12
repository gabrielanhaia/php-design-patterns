<?php

declare(strict_types=1);

namespace App\NullObject\Component;

/**
 * Class EventDispatcher
 * @package App\NullObject\Component
 */
class NullEventDispatcher implements EventDispatcherInterface
{
    public function dispatch(string $serializedEvent): void
    {
        dump("Nothing happened here.");
    }
}