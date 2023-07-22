<?php

namespace App\Visitor;

class AdminUser implements User
{
    public function accept(RoleVisitor $roleVisitor): bool
    {
        return $roleVisitor->visitAdmin($this);
    }
}