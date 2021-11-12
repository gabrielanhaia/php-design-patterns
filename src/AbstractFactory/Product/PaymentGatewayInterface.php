<?php

namespace App\AbstractFactory\Product;

interface PaymentGatewayInterface
{
    public function pay(string $data);
}