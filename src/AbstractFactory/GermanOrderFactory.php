<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Product\CarrierCompanyInterface;
use App\AbstractFactory\Product\DHLCarrier;
use App\AbstractFactory\Product\PaymentGatewayInterface;
use App\AbstractFactory\Product\StripePaymentGateway;

class GermanOrderFactory extends OrderManagementAbstractFactory
{
    public function createPaymentGateway(): PaymentGatewayInterface
    {
        return new StripePaymentGateway();
    }

    public function createCarrierCompany(): CarrierCompanyInterface
    {
        return new DHLCarrier();
    }
}