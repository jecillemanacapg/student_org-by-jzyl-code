<?php
class Admin
{
    protected int $admin_id;
    protected string $username;
    protected string $password;
    protected string $officer_name;
    protected string $position;

    public function __construct(
        int $admin_id,
        string $username,
        string $password,
        string $officer_name,
        string $position
    ) {
        $this->admin_id = $admin_id;
        $this->username = $username;
        $this->password = $password;
        $this->officer_name = $officer_name;
        $this->position = $position;
    }

    public function getAdminId(): int
    {
        return $this->admin_id;
    }
    public function getUsername(): string
    {
        return $this->username;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function getOfficerName(): string
    {
        return $this->officer_name;
    }
    public function getPosition(): string
    {
        return $this->position;
    }
}
