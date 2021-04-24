<?php

declare(strict_types=1);

namespace App\Facade;

use App\Facade\Component\BarCodeUtil;
use App\Facade\Component\IntegrationSoapErp;
use App\Facade\Component\MarketplaceIntegration;
use App\Facade\Component\Product;
use App\Facade\Component\ProductRepository;

/**
 * Class ProductFlowFacade
 */
class ProductFlowFacade
{
    private ProductRepository $productRepository;
    private MarketplaceIntegration $marketplaceIntegration;
    private IntegrationSoapErp $integrationSoapErp;

    public function __construct(
        ProductRepository $productRepository,
        MarketplaceIntegration $marketplaceIntegration,
        IntegrationSoapErp $integrationSoapErp
    )
    {
        $this->productRepository = $productRepository;
        $this->marketplaceIntegration = $marketplaceIntegration;
        $this->integrationSoapErp = $integrationSoapErp;
    }

    public function createProducts(array $products): void
    {
        foreach ($products as $product) {
            $product = (new Product)
                ->setBarCode(BarCodeUtil::generateBarCode())
                ->setName($product['name'])
                ->setPrice($product['price'])
                ->setStock($product['stock'])
                ->setUuid('3786ebae-4816-46a8-88ac-7aa5b530524f');

            $this->productRepository->persist($product);

            $this->marketplaceIntegration->createProduct($product);

            $this->marketplaceIntegration->insertPrice($product->getUuid(), $product->getPrice());

            $this->marketplaceIntegration->insertStock($product->getUuid(), $product->getStock());

            $product->setIsOnMarketplace(true);

            $this->productRepository->update($product);

            $this->integrationSoapErp->setProductOnMarketplace($product, true);
        }
    }
}