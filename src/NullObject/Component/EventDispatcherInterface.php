<?php

declare(strict_types=1);

namespace App\NullObject\Component;

use App\NullObject\BaseEvent;

/**
 * Interface EventDispatcherInterface
 * @package App\NullObject\Component
 */
interface EventDispatcherInterface
{
    public function dispatch(string $serializedEvent): void;
}