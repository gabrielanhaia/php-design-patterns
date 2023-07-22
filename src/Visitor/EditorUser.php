<?php

namespace App\Visitor;

class EditorUser implements User
{
    public function accept(RoleVisitor $roleVisitor): bool
    {
        return $roleVisitor->visitEditor($this);
    }
}