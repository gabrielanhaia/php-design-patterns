<?php

namespace App\State;

class StateInvoicePending extends State
{
    public function handle1(): void
    {
        echo "Handle 1 of " . StateInvoicePending::class;
        ln();
        $this->invoiceContext->transitionTo(new StateInvoiceApproved());
    }

    public function handle2(): void
    {
        echo "Handle 2 of " . StateInvoicePending::class;
        ln();
    }
}