<?php

namespace App\ChainOfResponsibility;

class ErrorLogger extends AbstractLogger
{
    public function __construct(LogLevelEnum $level)
    {
        $this->level = $level;
    }

    protected function writeLog(string $message): void
    {
        echo "Error Logger: $message\n";
    }
}