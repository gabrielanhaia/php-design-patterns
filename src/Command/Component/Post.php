<?php

namespace App\Command\Component;

class Post
{
    public function __construct(protected string $title, protected string $content)
    {
    }

    public function create(): void
    {
        // Logic for creating a post
        echo "Post '{$this->title}' has been created.\n";
    }

    public function update(string $newTitle, string $newContent): void
    {
        // Logic for updating a post
        $this->title = $newTitle;
        $this->content = $newContent;
        echo "Post has been updated to '{$this->title}'.\n";
    }

    public function delete(): void
    {
        // Logic for deleting a post
        echo "Post '{$this->title}' has been deleted.\n";
    }
}