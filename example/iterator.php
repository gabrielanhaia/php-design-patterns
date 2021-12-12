<?php

use App\Iterator;

require_once 'autoloader.php';

$userCollection = new Iterator\UserColletion();
$userCollection->addUser('Gabriel')
    ->addUser('Alice')
    ->addUser('Braian')
    ->addUser('George')
    ->addUser('Lucy');

lns();
ln();
echo '------- Regular traversal -------';
ln();
foreach ($userCollection->getIterator() as $user) {
    echo $user;
    ln();
}

lns();
ln();

echo '------- Reverse traversal -------';
ln();
foreach ($userCollection->getReverseIterator() as $user) {
    echo $user;
    ln();
}