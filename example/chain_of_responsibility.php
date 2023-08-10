<?php

use App\ChainOfResponsibility\ConsoleLogger;
use App\ChainOfResponsibility\ErrorLogger;
use App\ChainOfResponsibility\FileLogger;
use App\ChainOfResponsibility\LogLevelEnum;

require_once 'autoloader.php';

// Client code
$consoleLogger = new ConsoleLogger(LogLevelEnum::INFO);
$errorLogger = new ErrorLogger(LogLevelEnum::ERROR);
$fileLogger = new FileLogger(LogLevelEnum::DEBUG);

$consoleLogger->setNext($errorLogger)->setNext($fileLogger);

// Make a request
lns();ln();
$consoleLogger->log("This is an informational message.", LogLevelEnum::INFO);
lns();ln();
$consoleLogger->log("This is an error message.", LogLevelEnum::ERROR);
lns();ln();
$consoleLogger->log("This is a debug message.", LogLevelEnum::DEBUG);