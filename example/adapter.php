<?php

use App\Adapter\OldIntegration;
use App\Adapter\ScoreIntegrationAdapter;

require_once 'autoloader.php';

$oldIntegration = new OldIntegration;
$integrationAdapter = new ScoreIntegrationAdapter($oldIntegration);

$userUuid = 'e605fa5f-f805-4ca8-ade2-908c8d5a8c4c';
$users = $integrationAdapter->getUserScore($userUuid);

dump($users);
