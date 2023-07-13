<?php

namespace App\Command;

class CreatePostCommand extends AbstractPostCommand
{
    public function execute(): void
    {
        $this->post->create();
    }
}