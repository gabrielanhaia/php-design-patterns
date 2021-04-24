<?php

declare(strict_types=1);

namespace App\Facade\Component;

/**
 * Class ProductRepository
 * @package App\Facade\Component
 */
class ProductRepository
{
    public function persist(Product $product): void
    {
        // It could insert into the database here.
        echo $product->getName() . " persisted.\n";
    }

    public function update(Product $product): void
    {
        // It could update into the database here.
        echo $product->getName() . " updated.\n";
    }
}