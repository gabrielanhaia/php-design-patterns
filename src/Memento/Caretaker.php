<?php

namespace App\Memento;

class Caretaker
{
    /** @var array|TextSnapshot[] */
    private array $textSnapshots = [];

    private TextEditor $textEditor;

    public function __construct(TextEditor $textEditor)
    {
        $this->textEditor = $textEditor;
    }

    public function getLastSnapshotDate(): ?\DateTime
    {
        if (empty($this->textSnapshots)) {
            return null;
        }

        return $this->textSnapshots[array_key_last($this->textSnapshots)]->getUpdatedAt();
    }

    public function backup(): void
    {
        $this->textSnapshots[] = $this->textEditor->createSnapshot();
    }

    public function undo(): void
    {
        if (sizeof($this->textSnapshots) === 0) {
            return;
        }

        $restoredTextEditor = array_pop($this->textSnapshots);
        $this->textEditor->restore($restoredTextEditor);
    }
}