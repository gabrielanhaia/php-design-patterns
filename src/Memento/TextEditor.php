<?php

namespace App\Memento;

class TextEditor
{
    private string $text;

    public function createSnapshot(): TextSnapshotMemento
    {
        return new TextSnapshot($this->text);
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): TextEditor
    {
        $this->text = $text;

        return $this;
    }

    public function restore(TextSnapshot $textSnapshot)
    {
        $this->text = $textSnapshot->getText();
    }
}