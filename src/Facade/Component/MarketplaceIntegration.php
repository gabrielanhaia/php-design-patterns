<?php


namespace App\Facade\Component;

/**
 * Class MarketplaceIntegration
 * @package App\Facade\Component
 */
class MarketplaceIntegration
{
    public function createProduct(Product $product): void
    {
        // It could call an external service here to create the product.
    }

    public function insertPrice(string $productUuid, float $price): void
    {
        // It could call an external service here to insert price into the marketplace.
    }

    public function insertStock(string $productUuid, int $stock = 0): void
    {
        // It could call an external service here to insert the amount of products in stock.
    }
}