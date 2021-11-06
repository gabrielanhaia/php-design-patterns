<?php

namespace App\Observer;

use App\Observer\Component\Invoice;

class EmailAlertListener implements EventListener
{
    public function notified(Invoice $invoice, array $extraData)
    {
        echo sprintf(
            "Email sent to `%s` informing that the invoice with number `%s` is now in state `%s`.\n",
            $invoice->getCustomerEmailAddress(),
            $invoice->getInvoiceNumber(),
            $invoice->getState()
        );
    }
}