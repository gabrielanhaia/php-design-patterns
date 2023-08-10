<?php

namespace App\ChainOfResponsibility;

class FileLogger extends AbstractLogger
{
    public function __construct(LogLevelEnum $level)
    {
        $this->level = $level;
    }

    protected function writeLog(string $message): void
    {
        echo "File Logger: $message\n";
    }
}