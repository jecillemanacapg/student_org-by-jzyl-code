<?php
include_once __DIR__ . '/DBRepository.php';
include_once __DIR__ . '/IOrganizationRepository.php';
class OrganizationRepository extends DBRepository implements IOrganizationRepository
{
    public static function all(): array
    {
        $query = self::query("SELECT * FROM organization");
        $result = [];
        foreach ($query as $o) {
            $result[] = new Organization(
                $o['org_id'],
                $o['org_code'],
                $o['org_name'],
                $o['org_description'],
                $o['member_count']
            );
        }
        return $result;
    }

    public static function create(array $organization)
    {
        $sql = "INSERT INTO organization (org_code, org_name, org_description, member_count) ";
        $sql .= "VALUES ('" . $organization['org_id'] . "', '" . $organization['org_code'] . "','" . $organization['org_name'] . "', '" . $organization['org_description'] . "', " . $organization['member_count'] . ");";
        self::connection()->query($sql);
    }

    public static function find(string $id): array
    {
        return [];
    }

    public static function update(array $organization, string $id): array
    {
        return [];
    }

    public static function delete(string $id): void
    {

    }
}