<?php

use App\{Singleton};

require_once 'autoloader.php';

$dbConnectionInstance1 = Singleton\DBConnectionSingleton::getConnection();
$dbConnectionInstance2 = Singleton\DBConnectionSingleton::getConnection();

echo $dbConnectionInstance1->doSomething();
ln();
echo $dbConnectionInstance2->doSomething();
ln();

if (spl_object_id($dbConnectionInstance1) === spl_object_id($dbConnectionInstance2)) {
    dump('Object "$dbConnectionInstance1" and "$dbConnectionInstance2" are exactly the same in memory.');
}