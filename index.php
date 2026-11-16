<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login_admin.php");
    exit;
}
?>
<?php
include __DIR__ . '/classes/Page.php';
include __DIR__ . '/classes/Organization.php';
include __DIR__ . '/classes/Event.php';
?>
<?php include __DIR__ . '/repositories/IOrganizationRepository.php'; ?>
<?php include __DIR__ . '/repositories/OrganizationRepository.php'; ?>

<?php include __DIR__ . '/repositories/IEventRepository.php'; ?>
<?php include __DIR__ . '/repositories/EventRepository.php'; ?>
<html>
<?php include __DIR__ . '/components/head.php'; ?>

<body>
    <?php include __DIR__ . '/components/header.php'; ?>

    <?php include __DIR__ . '/components/navbar.php'; ?>

    <?php Page::display($_GET['page'] ?? 'homepage'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>