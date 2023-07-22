<?php

namespace App\Visitor;

class CanEditVisitor implements RoleVisitor {
    public function visitAdmin(AdminUser $admin): bool {
        return true;
    }

    public function visitEditor(EditorUser $editor): bool {
        return true;
    }

    public function visitViewer(ViewerUser $viewer): bool {
        return false;
    }
}