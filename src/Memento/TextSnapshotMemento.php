<?php

namespace App\Memento;

interface TextSnapshotMemento
{
    public function __construct(string $text);

    public function getText(): string;

    public function getUpdatedAt(): \DateTime;
}