<?php include '../classes/Page.php'; ?>
<?php include '../classes/Organization.php'; ?>
<?php include '../classes/Event.php'; ?>

<?php include '../repositories/IOrganizationRepository.php'; ?>
<?php include '../repositories/DBRepository.php'; ?>
<?php include '../repositories/OrganizationRepository.php'; ?>

<?php
$org_number = $_POST['org_number'];
$org_name = $_POST['org_name'];
$org_description = $_POST['org_description'];
$member_count = $_POST['member_count'];

OrganizationRepository::create([
    'org_number' => $org_number,
    'org_name' => $org_name,
    'org_description' => $org_description,
    'member_count' => $member_count,
]);
