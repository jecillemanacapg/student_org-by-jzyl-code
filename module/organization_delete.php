<?php include '../config/config.php'; ?>
<?php include '../classes/Page.php'; ?>
<?php include '../classes/Record.php'; ?>
<?php include '../classes/Organization.php'; ?>
<?php include '../classes/Event.php'; ?>

<?php include '../repositories/IOrganizationRepository.php'; ?>
<?php include '../repositories/DBRepository.php'; ?>
<?php include '../repositories/OrganizationRepository.php'; ?>

<?php
$id = $_GET['id'];
OrganizationRepository::delete($id);
header("location: ../index.php?page=organization&message=org_deleted");
?>