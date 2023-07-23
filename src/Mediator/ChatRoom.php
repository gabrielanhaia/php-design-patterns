<?php

namespace App\Mediator;

class ChatRoom implements ChatRoomMediator
{
    public function showMessage(User $user, string $message): void
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        echo $time . '[' . $sender . ']:' . $message;
    }
}