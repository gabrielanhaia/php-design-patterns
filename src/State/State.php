<?php

namespace App\State;

abstract class State
{
    protected InvoiceContext $invoiceContext;

    public function setContext(InvoiceContext $invoiceContext)
    {
        $this->invoiceContext = $invoiceContext;
    }

    public function cancelOrder(): void
    {
        $this->invoiceContext->transitionTo(new StateInvoiceCanceled());
    }

    public abstract function handle1(): void;

    public abstract function handle2(): void;
}