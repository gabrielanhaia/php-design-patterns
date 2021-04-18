<?php

use App\Adapter\Component\OldIntegration;
use App\Adapter\ScoreIntegrationAdapter;

require_once 'autoloader.php';

$oldIntegration = new OldIntegration;
$integrationAdapter = new ScoreIntegrationAdapter($oldIntegration);

$users = $integrationAdapter->getUsers();

dump($users);
