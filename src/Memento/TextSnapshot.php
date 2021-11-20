<?php

namespace App\Memento;

class TextSnapshot implements TextSnapshotMemento
{
    private string $text;

    private \DateTime $updatedAt;

    public function __construct(string $text)
    {
        $this->text = $text;
        $this->updatedAt = new \DateTime();
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
}