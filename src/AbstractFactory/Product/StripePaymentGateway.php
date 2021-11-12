<?php

namespace App\AbstractFactory\Product;

class StripePaymentGateway implements PaymentGatewayInterface
{
    public function pay(string $data)
    {
        echo "Order `{$data}` paid through Stripe";
    }
}