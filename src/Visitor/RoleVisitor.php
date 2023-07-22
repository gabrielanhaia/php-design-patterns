<?php

namespace App\Visitor;

interface RoleVisitor {
    public function visitAdmin(AdminUser $admin): bool;

    public function visitEditor(EditorUser $editor): bool;

    public function visitViewer(ViewerUser $viewer): bool;
}