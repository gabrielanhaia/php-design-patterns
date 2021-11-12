<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Product\CarrierCompanyInterface;
use App\AbstractFactory\Product\FedexCarrier;
use App\AbstractFactory\Product\PaymentGatewayInterface;
use App\AbstractFactory\Product\PaypalPaymentGateway;

class AmericanOrderFactory extends OrderManagementAbstractFactory
{
    public function createPaymentGateway(): PaymentGatewayInterface
    {
        return new PaypalPaymentGateway();
    }

    public function createCarrierCompany(): CarrierCompanyInterface
    {
        return new FedexCarrier();
    }
}