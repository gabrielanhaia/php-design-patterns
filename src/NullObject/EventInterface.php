<?php

declare(strict_types=1);

namespace App\NullObject;

use App\NullObject\Component\EventDispatcher;

abstract class  EventInterface
{
    /**
     * @var EventDispatcher
     */
    protected EventDispatcher $eventDispatcher;

    public function __construct(EventDispatcher $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public abstract function dispatch();
}