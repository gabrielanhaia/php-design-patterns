<?php

namespace App\Mediator;

class User
{
    protected string $name;
    protected ChatRoomMediator $chatMediator;

    public function __construct(string $name, ChatRoomMediator $chatMediator)
    {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function send(string $message): void
    {
        $this->chatMediator->showMessage($this, $message);
    }
}