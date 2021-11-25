<?php

namespace App\Composite;

abstract class MessengerComponent
{
    protected MessengerComponent $parent;

    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setParent(MessengerComponent $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): MessengerComponent
    {
        return $this->parent;
    }

    public function isComposite(): bool
    {
        return false;
    }

    public function add(MessengerComponent $component): void
    {
        // Nothing happens by default.
    }

    public function remove(MessengerComponent $component): void
    {
        // Nothing happens by default.
    }

    public abstract function operation(): string;
}