<?php

namespace App\Command;

class PostManager
{
    private AbstractPostCommand $command;

    public function setCommand(AbstractPostCommand $command): void
    {
        $this->command = $command;
    }

    public function executeCommand(): void
    {
        $this->command->execute();
    }
}