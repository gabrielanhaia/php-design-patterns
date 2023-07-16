<?php

namespace App\Bridge;

class HomePage extends WebPage
{
    public function getContent(): string
    {
        return "Home page in " . $this->theme->getColor();
    }
}