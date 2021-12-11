<?php

namespace App\State;

class InvoiceContext
{
    protected State $state;

    public function __construct(State $state)
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function transitionTo(State $state): void
    {
        echo "State transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function doSomething1(): void
    {
        $this->state->handle1();
    }

    public function doSomething2(): void
    {
        $this->state->handle2();
    }

    public function cancelOrder(): void
    {
        $this->state->cancelOrder();
    }
}