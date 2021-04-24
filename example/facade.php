<?php

use App\Facade\Component\IntegrationSoapErp;
use App\Facade\Component\MarketplaceIntegration;
use App\Facade\Component\ProductRepository;
use App\Facade\ProductFlowFacade;

require_once 'autoloader.php';

$productRepository = new ProductRepository;
$marketplaceIntegration = new MarketplaceIntegration;
$integrationSoapErp = new IntegrationSoapErp;

$productFlowFacade = new ProductFlowFacade($productRepository, $marketplaceIntegration, $integrationSoapErp);

$products = [
    ['name' => 'Nice Mug', 'price' => 10.5, 'stock' => 50],
    ['name' => 'Smartphone Model X', 'price' => 100, 'stock' => 1000],
];
$productFlowFacade->createProducts($products);