<?php

declare(strict_types=1);

namespace App\NullObject;

class InvoiceCreatedEvent extends EventInterface
{
    public function dispatch()
    {
        $this->eventDispatcher->dispatchEvent(self::class);
    }
}