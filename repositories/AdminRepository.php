<?php
include_once __DIR__ . '/DBRepository.php';
include_once __DIR__ . '/IAdminRepository.php';
include_once __DIR__ . '/../classes/Admin.php';

class AdminRepository extends DBRepository implements IAdminRepository
{
    public static function all(): array
    {
        $query = self::query("SELECT * FROM admin");
        $result = [];
        foreach ($query as $a) {
            $result[] = new Admin(
                $a['admin_id'],
                $a['username'],
                $a['password']
            );
        }
        return $result;
    }

    public static function findByUsername(string $username): ?Admin
    {
        $query = self::query("SELECT * FROM admin WHERE username = '$username'");
        if (empty($query))
            return null;

        $row = $query[0];
        return new Admin(
            $row['admin_id'],
            $row['username'],
            $row['password']
        );
    }
}
?>