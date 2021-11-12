<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Product\CarrierCompanyInterface;
use App\AbstractFactory\Product\PaymentGatewayInterface;

abstract class OrderManagementAbstractFactory
{
    public abstract function createPaymentGateway(): PaymentGatewayInterface;

    public abstract function createCarrierCompany(): CarrierCompanyInterface;
}