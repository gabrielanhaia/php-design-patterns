<?php

use \App\State;

require_once 'autoloader.php';

ln();lns();ln();
$invoiceContext = new State\InvoiceContext(new State\StateInvoicePending());
$invoiceContext->doSomething2();
$invoiceContext->doSomething1();

lns();ln();

$invoiceContext->doSomething2();
$invoiceContext->doSomething1();

lns();ln();

$invoiceContext->doSomething1();
$invoiceContext->doSomething2();

lns();ln();

$invoiceContext->doSomething1();
$invoiceContext->doSomething2();
