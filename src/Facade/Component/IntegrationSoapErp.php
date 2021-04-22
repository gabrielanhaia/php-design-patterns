<?php

declare(strict_types=1);

namespace App\Facade\Component;

/***
 * Class IntegrationSoapErp
 * @package App\Facade\Component
 * 
 */
class IntegrationSoapErp
{
    /**
     * This is just an example.
     */
    public function setProductOnMarketplace(Product $product, bool $isOnMarketplace)
    {
        // It could call an external service to inform that the product was added/removed to the Marketplace.
        echo $product->getName() . " updated on the ERP system.\n";
    }
}