<?php

namespace App\AbstractFactory\Product;

class DHLCarrier implements CarrierCompanyInterface
{
    public function ship(string $data)
    {
        echo "Package `{$data}` shipped by DHL";
    }
}