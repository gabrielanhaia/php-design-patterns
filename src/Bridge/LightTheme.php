<?php

namespace App\Bridge;

class LightTheme implements Theme
{
    public function getColor(): string
    {
        return 'Off White';
    }
}