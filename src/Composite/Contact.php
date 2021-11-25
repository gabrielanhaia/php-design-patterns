<?php

namespace App\Composite;

class Contact extends MessengerComponent
{
    public function operation(): string
    {
        return "\tcontact:{$this->name}";
    }
}