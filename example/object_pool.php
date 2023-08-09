<?php

use App\ObjectPool\DatabaseConnectionPool;

require_once 'autoloader.php';

$pool = new DatabaseConnectionPool();

// Get a connection from the pool and use it
$connection = $pool->get();
$connection->query("SELECT * FROM users");
$pool->release($connection);