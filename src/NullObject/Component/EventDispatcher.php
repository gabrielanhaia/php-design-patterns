<?php

declare(strict_types=1);

namespace App\NullObject\Component;

use App\NullObject\BaseEvent;

/**
 * Class EventDispatcher
 * @package App\NullObject\Component
 */
class EventDispatcher implements EventDispatcherInterface
{
    public function dispatch(string $serializedEvent): void
    {
        dump("Event '{$serializedEvent}' dispatched.");
    }
}