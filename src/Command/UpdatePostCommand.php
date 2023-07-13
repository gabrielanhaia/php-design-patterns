<?php

namespace App\Command;

use App\Command\Component\Post;

class UpdatePostCommand extends AbstractPostCommand
{
    public function __construct(Post $post, protected string $newTitle, protected string $newContent)
    {
        parent::__construct($post);
    }

    public function execute(): void
    {
        $this->post->update($this->newTitle, $this->newContent);
    }
}