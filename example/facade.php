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

$productFlowFacade->createProduct('Nice Mug', 10.5, 50);