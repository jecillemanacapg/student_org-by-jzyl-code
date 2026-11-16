<?php
class Page
{
    public static function display(string $page)
    {
        switch ($page) {
            case 'organization':
                include __DIR__ . '/../module/organization_display.php';
                break;
            case 'event':
                include __DIR__ . '/../module/event_display.php';
                break;
            case 'organization_add':
                include __DIR__ . '/../module/organization_add.php';
                break;
            case 'organization_edit':
                include __DIR__ . '/../module/organization_edit.php';
                break;
            default:
                include __DIR__ . '/../module/homepage_display.php';
                break;
        }
    }
}
?>