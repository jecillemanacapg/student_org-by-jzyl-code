<?php
interface IAdminRepository
{
    public static function all(): array;
    public static function findByUsername(string $username);
}
?>