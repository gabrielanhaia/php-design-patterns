<?php

namespace App\AbstractFactory\Product;

class FedexCarrier implements CarrierCompanyInterface
{
    public function ship(string $data)
    {
        echo "Package `{$data}` shipped by Fedex";
    }
}