<?php

namespace App\State;

class StateInvoiceApproved extends State
{
    public function handle1(): void
    {
        echo "Handle 1 of " . StateInvoiceApproved::class;
        ln();
        $this->invoiceContext->transitionTo(new StateInvoiceShipped());
    }

    public function handle2(): void
    {
        echo "Handle 2 of " . StateInvoiceApproved::class;
        ln();
    }
}