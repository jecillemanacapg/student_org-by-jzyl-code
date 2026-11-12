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
            default:
                include __DIR__ . '/../module/homepage_display.php';
        }
    }
}