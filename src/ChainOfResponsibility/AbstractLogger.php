<?php

namespace App\ChainOfResponsibility;

abstract class AbstractLogger implements Logger
{
    protected LogLevelEnum $level;
    protected ?Logger $nextLogger = null;

    public function setNext(Logger $logger): Logger
    {
        $this->nextLogger = $logger;
        return $logger;
    }

    public function log(string $message, LogLevelEnum $level): void
    {
        if ($this->level->value <= $level->value) {
            $this->writeLog($message);
        }
        if ($this->nextLogger !== null) {
            $this->nextLogger->log($message, $level);
        }
    }

    abstract protected function writeLog(string $message): void;
}