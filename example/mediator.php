<?php

use App\Mediator\ChatRoom;
use App\Mediator\User;

require_once 'autoloader.php';

$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

lns();ln();
$john->send('Hi there!');
ln();
$jane->send('Hey!');