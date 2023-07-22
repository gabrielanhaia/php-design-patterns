<?php

namespace App\Visitor;

interface User {
    public function accept(RoleVisitor $roleVisitor): bool;
}
