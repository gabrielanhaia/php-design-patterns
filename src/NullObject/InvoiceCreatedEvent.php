<?php

declare(strict_types=1);

namespace App\NullObject;

class InvoiceCreatedEvent extends BaseEvent
{
    public function dispatch(): void
    {
        $serializedEvent = get_class($this);

        $this->eventDispatcher->dispatch($serializedEvent);
    }
}