<?php
include_once __DIR__ . '/../config/config.php';
include_once __DIR__ . '/../repositories/AdminRepository.php';
$admin = AdminRepository::findByUsername("admin");
?>
<nav class="navbar">
    <div class="container">
        <div class="d-flex gap-4">
            <a href="?page=homepage" class="navlink">Homepage</a>
            <a href="?page=event" class="navlink">Event</a>
            <a href="?page=organization" class="navlink">Organization</a>
        </div>
    </div>
</nav>
<div style="position: fixed; top: 10px; right: 20px; z-index: 9999;">
    <div class="dropdown">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="officerDropdownBtn"
            data-bs-toggle="dropdown" aria-expanded="false"> ☰
        </button>
        <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="officerDropdownBtn">
            <li><strong><?php echo $admin->getOfficerName(); ?></strong></li>
            <li>
                <p><?php echo $admin->getPosition(); ?></p>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="login_admin.php">Logout</a></li>
        </ul>
    </div>
</div>