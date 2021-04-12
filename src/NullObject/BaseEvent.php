<?php

declare(strict_types=1);

namespace App\NullObject;

use App\NullObject\Component\EventDispatcherInterface;

abstract class BaseEvent
{
    /**
     * @var EventDispatcherInterface
     */
    protected EventDispatcherInterface $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public abstract function dispatch(): void;
}