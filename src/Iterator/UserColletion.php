<?php

namespace App\Iterator;

use Exception;
use Traversable;

class UserColletion implements \IteratorAggregate
{
    /** @var array|string[]  */
    private array $users = [];

    public function getUsers(): array
    {
        return $this->users;
    }

    public function addUser(string $user): self
    {
        $this->users[] = $user;
        return $this;
    }

    public function getIterator(): \Iterator
    {
        return new UserCollectionIterator($this);
    }

    public function getReverseIterator(): \Iterator
    {
        return new UserCollectionIterator($this, true);
    }

    public function count(): int
    {
        return sizeof($this->users);
    }
}