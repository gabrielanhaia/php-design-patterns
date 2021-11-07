<?php

declare(strict_types=1);

namespace App\Money;

class Money
{
    private int $amount;

    private Currency $currency;

    public function __construct(int $amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function __toString(): string
    {
        return (string) $this->amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): Money
    {
        $this->amount = $amount;
        return $this;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setCurrency(Currency $currency): Money
    {
        $this->currency = $currency;
        return $this;
    }

    public function isEqualTo(Money $money): bool
    {
        return ($this->amount === $money->getAmount()
            && $this->currency->getSymbol() === $money->currency->getSymbol());
    }

    /**
     * TODO: The currency should be considered as well.
     */
    public function isGreaterThan(Money $money): bool
    {
        return $this->amount > $money->getAmount();
    }

    /**
     * TODO: The currency should be considered as well.
     */
    public function isLowerThan(Money $money): bool
    {
        return $this->amount < $money->getAmount();
    }
}