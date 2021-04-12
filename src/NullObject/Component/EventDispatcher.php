<?php

declare(strict_types=1);

namespace App\NullObject\Component;

use App\NullObject\EventInterface;

/**
 * Class EventDispatcher
 * @package App\NullObject\Component
 */
class EventDispatcher
{
    public function dispatchEvent(string $eventName)
    {
        dump("Event '{$eventName}' dispatched.");
    }
}