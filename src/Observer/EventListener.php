<?php

namespace App\Observer;

use App\Observer\Component\Invoice;

interface EventListener
{
    public function notified(Invoice $invoice, array $extraData);
}