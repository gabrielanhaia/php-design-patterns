<?php

namespace App\Interpreter;

interface Expression
{
    public function interpret(string $context): array;
}
