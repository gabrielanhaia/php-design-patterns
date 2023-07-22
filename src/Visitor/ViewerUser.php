<?php

namespace App\Visitor;

class ViewerUser implements User
{
    public function accept(RoleVisitor $roleVisitor): bool
    {
        return $roleVisitor->visitViewer($this);
    }
}