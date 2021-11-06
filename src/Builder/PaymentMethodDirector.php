<?php

namespace App\Builder;

use App\Builder\Product\PaymentMethod;

class PaymentMethodDirector
{
    private AbstractPaymentMethodBuilder $builder;

    public function __construct(AbstractPaymentMethodBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(AbstractPaymentMethodBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildPaymentMethod(): PaymentMethod
    {
        $this->builder->buildPaymentMethodType()
            ->buildMaxInstalments()
            ->buildFeePercentageOverInstalments()
            ->buildPercentageDiscount()
            ->buildIsCardAllowed()
            ->buildIsSepaMandateAllowed()
            ->buildLimitDaysRefund();

        return $this->builder->getPaymentMethod();
    }
}