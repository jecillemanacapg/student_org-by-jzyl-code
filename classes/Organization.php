<?php
include_once __DIR__ . '/../classes/Record.php';
class Organization extends Record
{
    protected int $org_id;
    protected string $org_code;
    protected string $org_name;
    protected int $member_count;

    public function __construct(
        int $org_id,
        string $org_code,
        string $org_name,
        int $member_count,
        string $description
    ) {
        $this->org_id = $org_id;
        $this->org_code = $org_code;
        $this->org_name = $org_name;
        $this->member_count = $member_count;
        parent::__construct($description);
    }
    public function getOrgId(): string
    {
        return $this->org_id;
    }
    public function getOrgCode(): string
    {
        return $this->org_code;
    }
    public function getOrgName(): string
    {
        return $this->org_name;
    }
    public function getMemberCount(): int
    {
        return $this->member_count;
    }
}