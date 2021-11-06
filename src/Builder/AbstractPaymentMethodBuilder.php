<?php

namespace App\Builder;

use App\Builder\Product\PaymentMethod;

abstract class AbstractPaymentMethodBuilder
{
    protected PaymentMethod $paymentMethod;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->paymentMethod = new PaymentMethod();
    }

    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    public abstract function buildPaymentMethodType(): AbstractPaymentMethodBuilder;

    public abstract function buildMaxInstalments(): AbstractPaymentMethodBuilder;

    public abstract function buildFeePercentageOverInstalments(): AbstractPaymentMethodBuilder;

    public abstract function buildPercentageDiscount(): AbstractPaymentMethodBuilder;

    public abstract function buildIsCardAllowed(): AbstractPaymentMethodBuilder;

    public abstract function buildIsSepaMandateAllowed(): AbstractPaymentMethodBuilder;

    public abstract function buildLimitDaysRefund(): AbstractPaymentMethodBuilder;
}