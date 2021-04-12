<?php

use App\Adapter\Component\OldIntegration;
use App\Adapter\IntegrationAdapter;

require_once 'autoloader.php';

$oldIntegration = new OldIntegration;
$integrationAdapter = new IntegrationAdapter($oldIntegration);

$users = $integrationAdapter->getUsers();

dump($users);
