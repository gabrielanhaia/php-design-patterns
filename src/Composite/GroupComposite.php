<?php

namespace App\Composite;

class GroupComposite extends MessengerComponent
{
    protected \SplObjectStorage $children;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->children = new \SplObjectStorage();
    }

    public function add(MessengerComponent $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(MessengerComponent $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = "\n\t" . $child->operation();
        }

        return "MessageGroup:{$this->name}(" . "\t" . implode("+", $results) . "\n" . ")";
    }
}