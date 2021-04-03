<?php

declare(strict_types=1);

namespace App\Adapter\Component;

/**
 * Class UserCollection
 * @package App\Adapter\Component
 */
class UserCollection implements \Iterator
{
    /** @var array|User[] $users */
    private array $users = [];

    public function __construct(array $users = [])
    {
        foreach ($users as $user) {
            $this->add($user);
        }
    }

    public function add(User $user): void
    {
        $this->users[] = $user;
    }

    /**
     * @return User[]|array
     */
    public function getAll(): array
    {
        return $this->users;
    }

    public function current()
    {
        // TODO: Implement current() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}