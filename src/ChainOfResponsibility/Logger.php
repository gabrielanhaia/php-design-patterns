<?php

namespace App\ChainOfResponsibility;

interface Logger
{
    public function setNext(Logger $logger): Logger;

    public function log(string $message, LogLevelEnum $level): void;
}