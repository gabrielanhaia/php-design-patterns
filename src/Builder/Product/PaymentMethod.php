<?php

namespace App\Builder\Product;

class PaymentMethod
{
    private TypeEnum $paymentMethodType;

    private int $maxInstalments;

    private float $feePercentageOverInstalments;

    private float $percentageDiscount;

    private bool $isCardAllowed;

    private bool $isSepaMandateAllowed;

    private int $limitDaysRefund;

    /**
     * @return TypeEnum
     */
    public function getPaymentMethodType(): TypeEnum
    {
        return $this->paymentMethodType;
    }

    /**
     * @param TypeEnum $paymentMethodType
     */
    public function setPaymentMethodType(TypeEnum $paymentMethodType): void
    {
        $this->paymentMethodType = $paymentMethodType;
    }

    /**
     * @return int
     */
    public function getMaxInstalments(): int
    {
        return $this->maxInstalments;
    }

    /**
     * @param int $maxInstalments
     */
    public function setMaxInstalments(int $maxInstalments): void
    {
        $this->maxInstalments = $maxInstalments;
    }

    /**
     * @return float
     */
    public function getFeePercentageOverInstalments(): float
    {
        return $this->feePercentageOverInstalments;
    }

    /**
     * @param float $feePercentageOverInstalments
     */
    public function setFeePercentageOverInstalments(float $feePercentageOverInstalments): void
    {
        $this->feePercentageOverInstalments = $feePercentageOverInstalments;
    }

    /**
     * @return float
     */
    public function getPercentageDiscount(): float
    {
        return $this->percentageDiscount;
    }

    /**
     * @param float $percentageDiscount
     */
    public function setPercentageDiscount(float $percentageDiscount): void
    {
        $this->percentageDiscount = $percentageDiscount;
    }

    /**
     * @return bool
     */
    public function isCardAllowed(): bool
    {
        return $this->isCardAllowed;
    }

    /**
     * @param bool $isCardAllowed
     */
    public function setIsCardAllowed(bool $isCardAllowed): void
    {
        $this->isCardAllowed = $isCardAllowed;
    }

    /**
     * @return bool
     */
    public function isSepaMandateAllowed(): bool
    {
        return $this->isSepaMandateAllowed;
    }

    /**
     * @param bool $isSepaMandateAllowed
     */
    public function setIsSepaMandateAllowed(bool $isSepaMandateAllowed): void
    {
        $this->isSepaMandateAllowed = $isSepaMandateAllowed;
    }

    /**
     * @return int
     */
    public function getLimitDaysRefund(): int
    {
        return $this->limitDaysRefund;
    }

    /**
     * @param int $limitDaysRefund
     */
    public function setLimitDaysRefund(int $limitDaysRefund): void
    {
        $this->limitDaysRefund = $limitDaysRefund;
    }
}