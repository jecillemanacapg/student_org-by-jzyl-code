<?php
class Organization
{
    protected int $org_id;
    protected string $org_code;
    protected string $org_name;
    protected string $org_description;
    protected int $member_count;

    public function __construct(
        int $org_id,
        string $org_code,
        string $org_name,
        string $org_description,
        int $member_count
    ) {
        $this->org_id = $org_id;
        $this->org_code = $org_code;
        $this->org_name = $org_name;
        $this->org_description = $org_description;
        $this->member_count = $member_count;
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
    public function getOrgDescription(): string
    {
        return $this->org_description;
    }
    public function getMemberCount(): int
    {
        return $this->member_count;
    }
}