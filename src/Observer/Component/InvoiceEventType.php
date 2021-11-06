<?php

namespace App\Observer\Component;

enum InvoiceEventType
{
    case CREATED;

    case APPROVED;

    case CANCELED;
}