<?php

namespace App\State;

class StateInvoiceDelivered extends State
{
    public function handle1(): void
    {
        echo "Handle 1 of " . StateInvoiceDelivered::class;
        ln();
    }

    public function handle2(): void
    {
        echo "Handle 2 of " . StateInvoiceDelivered::class;
        ln();
    }
}