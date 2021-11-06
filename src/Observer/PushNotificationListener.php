<?php

namespace App\Observer;

use App\Observer\Component\Invoice;

class PushNotificationListener implements EventListener
{
    public function notified(Invoice $invoice, array $extraData)
    {
        echo sprintf(
            "Push notification was sent informing that the invoice with number `%s` is now in state `%s`.\n",
            $invoice->getInvoiceNumber(),
            $invoice->getState()
        );
    }
}