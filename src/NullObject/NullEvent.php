<?php

declare(strict_types=1);

namespace App\NullObject;

class NullEvent extends EventInterface
{
    public function dispatch()
    {
        // Do nothing.
    }
}