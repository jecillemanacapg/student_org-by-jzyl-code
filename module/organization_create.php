<?php include '../config/config.php'; ?>
<?php include '../classes/Page.php'; ?>
<?php include '../classes/Event.php'; ?>
<?php include '../classes/Organization.php'; ?>

<?php include '../repositories/IOrganizationRepository.php'; ?>
<?php include '../repositories/DBRepository.php'; ?>
<?php include '../repositories/OrganizationRepository.php'; ?>

<?php
$org_id = $_POST['org_id'];
$org_code = $_POST['org_code'];
$org_name = $_POST['org_name'];
$org_description = $_POST['org_description'];
$member_count = $_POST['member_count'];

OrganizationRepository::create([
    'org_id' => $org_id,
    'org_code' => $org_code,
    'org_name' => $org_name,
    'org_description' => $org_description,
    'member_count' => $member_count,
]);

header("location: ../index.php?page=organizations");
exit;
?>