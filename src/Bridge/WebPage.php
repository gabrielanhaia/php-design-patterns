<?php

namespace App\Bridge;

abstract class WebPage
{
    protected Theme $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    abstract public function getContent(): string;
}