<?php

namespace App\Bridge;

class DarkTheme implements Theme
{
    public function getColor(): string
    {
        return 'Dark Black';
    }
}