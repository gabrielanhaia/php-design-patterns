<?php

namespace App\Command;

use App\Command\Component\Post;

abstract class AbstractPostCommand
{
    public function __construct(protected Post $post)
    {
    }

    abstract public function execute(): void;
}