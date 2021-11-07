<?php

declare(strict_types=1);

namespace App\Money;

class Currency
{
    private string $name;

    private string $symbol;

    private function __construct(string $name, string $symbol)
    {
        $this->name = $name;
        $this->symbol = $symbol;
    }

    public static function USD(): Currency
    {
        return new self('American Dollar', 'USD');
    }

    public static function EUR(): Currency
    {
        return new self('Euro', 'EUR');
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }
}
