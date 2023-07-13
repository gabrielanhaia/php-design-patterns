<?php

namespace App\Command;

class DeletePostCommand extends AbstractPostCommand
{
    public function execute(): void
    {
        $this->post->delete();
    }
}