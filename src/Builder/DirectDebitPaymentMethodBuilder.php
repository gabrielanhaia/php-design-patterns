<?php

namespace App\Builder;

use App\Builder\Product\TypeEnum;

class DirectDebitPaymentMethodBuilder extends AbstractPaymentMethodBuilder
{
    public function buildPaymentMethodType(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setPaymentMethodType(TypeEnum::DEBIT);
        return $this;
    }

    public function buildMaxInstalments(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setMaxInstalments(6);
        return $this;
    }

    public function buildFeePercentageOverInstalments(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setPercentageDiscount(12.5);
        return $this;
    }

    public function buildPercentageDiscount(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setPercentageDiscount(5.0);
        return $this;
    }

    public function buildIsCardAllowed(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setIsCardAllowed(true);
        return $this;
    }

    public function buildIsSepaMandateAllowed(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setIsSepaMandateAllowed(true);
        return $this;
    }

    public function buildLimitDaysRefund(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setLimitDaysRefund(30);
        return $this;
    }
}