<?php

use App\Observer\Component\Invoice;
use App\Observer\Component\InvoiceEventType;
use App\Observer\EmailAlertListener;
use App\Observer\InvoiceEventManager;
use App\Observer\PushNotificationListener;

require_once 'autoloader.php';

lns();
ln();
$emailAlertListener = new EmailAlertListener();
$pushNotificationListener = new PushNotificationListener();

$invoiceEventManager = new InvoiceEventManager();

// Register the subscribers
$invoiceEventManager->subscribe(InvoiceEventType::CREATED, $emailAlertListener);
$invoiceEventManager->subscribe(InvoiceEventType::APPROVED, $emailAlertListener);
$invoiceEventManager->subscribe(InvoiceEventType::CANCELED, $emailAlertListener);
ln();
$invoiceEventManager->subscribe(InvoiceEventType::APPROVED, $pushNotificationListener);
$invoiceEventManager->subscribe(InvoiceEventType::CANCELED, $pushNotificationListener);
lns();
ln();
// -------------------------

$invoice = new Invoice(
    1234,
    100.55,
    InvoiceEventType::CREATED->name,
    'gabriel@anhaia.com'
);

$invoiceEventManager->notifySubscribers( InvoiceEventType::CREATED, $invoice, ['created_at' => new \DateTime()]);
ln();
$invoice->setState(InvoiceEventType::APPROVED->name);
$invoiceEventManager->notifySubscribers( InvoiceEventType::APPROVED, $invoice, ['approved_at' => new \DateTime()]);
ln();
$invoice->setState(InvoiceEventType::CANCELED->name);
$invoiceEventManager->notifySubscribers( InvoiceEventType::CANCELED, $invoice, ['canceled_at' => new \DateTime()]);