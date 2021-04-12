<?php

use App\NullObject\Component\EventDispatcher;
use App\NullObject\Component\NullEventDispatcher;
use App\NullObject\InvoiceCreatedEvent;

require_once 'autoloader.php';

$eventDispatcher = new EventDispatcher;
$nullEventDispatcher = new NullEventDispatcher;

$invoiceCreatedEvent = new InvoiceCreatedEvent($eventDispatcher);
$invoiceCreatedEvent->dispatch();

$invoiceCreatedEventNullObject = new InvoiceCreatedEvent($nullEventDispatcher);
$invoiceCreatedEventNullObject->dispatch();
$invoiceCreatedEventNullObject->dispatch();
