<?php
include '../config/config.php';
include '../classes/Page.php';
include '../classes/Organization.php';
include '../classes/Event.php';

include '../repositories/IOrganizationRepository.php';
include '../repositories/DBRepository.php';
include '../repositories/OrganizationRepository.php';

$id = $_GET['id'];
$org_id = $_POST['org_id'];
$org_code = $_POST['org_code'];
$org_name = $_POST['org_name'];
$description = $_POST['org_description'];
$member_count = $_POST['member_count'];
$data = [
    'org_code' => $org_code,
    'org_name' => $org_name,
    'org_description' => $description,
    'member_count' => $member_count
];
OrganizationRepository::update($data, $id);
header("location: ../index.php?page=organizations");
exit;
?>