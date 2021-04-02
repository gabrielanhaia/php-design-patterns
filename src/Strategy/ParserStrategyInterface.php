<?php

namespace App\Strategy;

use App\Strategy\Component\Product;

interface ParserStrategyInterface
{
    public function parseProduct(): Product;
}