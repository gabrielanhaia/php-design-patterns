<?php

namespace App\Bridge;

class AboutPage extends WebPage
{
    public function getContent(): string
    {
        return "About page in " . $this->theme->getColor();
    }
}