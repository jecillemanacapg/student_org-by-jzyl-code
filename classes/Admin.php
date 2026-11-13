<?php
class Admin
{
    protected int $admin_id;
    protected string $username;
    protected string $password;

    public function __construct(int $admin_id, string $username, string $password)
    {
        $this‑>admin_id = $admin_id;
        $this‑>username = $username;
        $this‑>password = $password;
    }

    // Getters (Required for teacher‑style coding!)
    public function getAdminId(): int { return $this‑>admin_id; }
    public function getUsername(): string { return $this‑>username; }
    public function getPassword(): string { return $this‑>password; }
}
?>