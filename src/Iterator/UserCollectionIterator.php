<?php

namespace App\Iterator;

class UserCollectionIterator implements \Iterator
{
    private UserColletion $collection;

    private int $position = 0;

    private bool $reverse;

    public function __construct(UserColletion $collection, bool $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function rewind(): void
    {
        $this->position = $this->reverse
            ? ($this->collection->count() - 1)
            : 0;
    }

    public function current(): string
    {
        return $this->collection->getUsers()[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function valid(): bool
    {
        return isset($this->collection->getUsers()[$this->position]);
    }
}