<?php

use App\Visitor\AdminUser;
use App\Visitor\CanEditVisitor;
use App\Visitor\EditorUser;
use App\Visitor\ViewerUser;

require_once 'autoloader.php';

$user1 = new AdminUser();
$canEditVisitor = new CanEditVisitor();

lns();ln();
if ($user1->accept($canEditVisitor)) {
    echo 'User 1 can edit';
} else {
    echo 'User 1 cannot edit';
}

ln();lns();ln();
$user2 = new EditorUser();
if ($user2->accept($canEditVisitor)) {
    echo 'User 2 can edit';
} else {
    echo 'User 2 cannot edit';
}

ln();lns();ln();
$user3 = new ViewerUser();
if ($user3->accept($canEditVisitor)) {
    echo 'User 3 can edit';
} else {
    echo 'User 3 cannot edit';
}
ln();lns();