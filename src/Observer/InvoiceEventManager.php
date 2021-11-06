<?php

namespace App\Observer;

use App\Observer\Component\Invoice;
use App\Observer\Component\InvoiceEventType;

class InvoiceEventManager
{
    public array $listeners = [];

    public function subscribe(InvoiceEventType $eventType, EventListener $eventListener): void
    {
        if ($this->isListenerSubscribed($eventType, $eventListener)) {
            return;
        }

        echo sprintf("Listener `%s` subscribed to `%s`.\n", get_class($eventListener), $eventType->name);

        $this->listeners[$eventType->name][] = $eventListener;
    }

    public function unsubscribe(InvoiceEventType $eventType, EventListener $eventListener): void
    {
        if (empty($this->listeners[$eventType->name])) {
            return;
        }

        foreach ($this->listeners[$eventType->name] as $index => $listener) {
            if ($listener instanceof $eventListener) {
                unset($this->listeners[$eventType->name][$index]);
                return;
            }
        }
    }

    public function notifySubscribers(InvoiceEventType $eventType, Invoice $invoice, array $extraData = []): void
    {
        if (empty($this->listeners[$eventType->name])) {
            return;
        }

        /** @var EventListener $listener */
        foreach ($this->listeners[$eventType->name] as $listener) {
            $listener->notified($invoice, $extraData);
        }
    }

    /**
     * This function was created just to check if the subscriber is already registered to the listener.
     * In another languages and/or if you are using a different way to store the listeners/subscribers, probably you do not even need it.
     */
    private function isListenerSubscribed(InvoiceEventType $eventType, EventListener $eventListener): bool
    {
        if (empty($this->listeners[$eventType->name])) {
            return false;
        }

        foreach ($this->listeners[$eventType->name] as $listener) {
            if ($listener instanceof $eventListener) {
                return true;
            }
        }

        return false;
    }
}