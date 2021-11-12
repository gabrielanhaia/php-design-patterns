<?php

namespace App\AbstractFactory\Product;

class PaypalPaymentGateway implements PaymentGatewayInterface
{
    public function pay(string $data)
    {
        echo "Order `{$data}` paid through Paypal";
    }
}