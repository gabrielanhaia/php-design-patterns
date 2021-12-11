<?php

namespace App\State;

class StateInvoiceShipped extends State
{
    public function handle1(): void
    {
        echo "Handle 1 of " . StateInvoiceShipped::class;
        ln();
    }

    public function handle2(): void
    {
        echo "Handle 2 of " . StateInvoiceShipped::class;
        ln();
        $this->invoiceContext->transitionTo(new StateInvoiceDelivered());
    }
}