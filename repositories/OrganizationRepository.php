<?php
include_once __DIR__ . '/DBRepository.php';
include_once __DIR__ . '/IOrganizationRepository.php';
class OrganizationRepository extends DBRepository implements IOrganizationRepository
{
    public static function all(): array
    {
        $query = self::query("SELECT * FROM organization");
        $result = [];
        foreach ($query as $row) {
            $orgId = (int) $row['org_id'];
            $memberCount = (int) $row['member_count'];

            $org = new Organization(
                $orgId,
                $row['org_code'],
                $row['org_name'],
                $memberCount,
                $row['org_description']
            );
            $result[] = $org;
        }
        return $result;

    }

    public static function create(array $organization)
    {
        $sql = "INSERT INTO organization (org_id, org_code, org_name, org_description, member_count) ";
        $sql .= "VALUES ('" . $organization['org_id'] . "', '" . $organization['org_code'] . "','" . $organization['org_name'] . "', '" . $organization['org_description'] . "', " . $organization['member_count'] . ");";
        self::connection()->query($sql);
    }
    public static function find(string $org_id): array
    {
        $query = self::query("SELECT * FROM organization WHERE org_id = $org_id");
        return array_shift($query);
    }
    public static function update(array $organization, string $org_id): void
    {
        $sql = "UPDATE organization SET  org_code = '" . $organization['org_code'] . "', ";
        $sql .= "org_name = '" . $organization['org_name'] . "', org_description = '" . $organization['org_description'] . "', ";
        $sql .= "member_count = " . $organization['member_count'] . " WHERE org_id = $org_id";
        self::connection()->query($sql);
    }
    public static function delete(string $org_id): void
    {
        $sql = "DELETE FROM organization WHERE org_id = " . $org_id;
        self::connection()->query($sql);
    }
    public static function save(string $org_id): void
    {
        $sql = "UPDATE organization SET org_id = " . $org_id;
        self::connection()->query($sql);
    }
}