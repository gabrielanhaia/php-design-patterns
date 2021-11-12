<?php

namespace App\AbstractFactory\Product;

interface CarrierCompanyInterface
{
    public function ship(string $data);
}