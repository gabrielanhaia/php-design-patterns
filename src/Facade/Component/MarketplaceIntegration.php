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
        echo $product->getName() . " created on the Marketplace.\n";
    }

    public function insertPrice(string $productUuid, float $price): void
    {
        // It could call an external service here to insert price into the marketplace.
        echo $productUuid . " price inserted on the Marketplace.\n";

    }

    public function insertStock(string $productUuid, int $stock = 0): void
    {
        // It could call an external service here to insert the amount of products in stock.
        echo $productUuid . " stock amount inserted on the Marketplace.\n";
    }
}