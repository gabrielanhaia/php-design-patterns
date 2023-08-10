<?php

namespace App\ChainOfResponsibility;

class ConsoleLogger extends AbstractLogger
{
    public function __construct(LogLevelEnum $level)
    {
        $this->level = $level;
    }

    protected function writeLog(string $message): void
    {
        echo "Console Logger: $message\n";
    }
}
