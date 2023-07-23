<?php

namespace App\Mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message): void;
}