<?php
include '../config/config.php';
include '../classes/Page.php';
include '../classes/Organization.php';
include '../classes/Event.php';

include '../repositories/IEventRepository.php';
include '../repositories/DBRepository.php';
include '../repositories/EventRepository.php';

$id = $_GET['id'];
$org_id = $_POST['org_id'];
$event_name = $_POST['event_name'];
$event_date = $_POST['event_date'];
$event_location = $_POST['event_location'];
$description = $_POST['event_description'];
$event_time = $_POST['event_time'];
$event_registered = $_POST['event_registered'];
$data = [
    'org_id' => $org_id,
    'event_name' => $event_name,
    'event_date' => $event_date,
    'event_location' => $event_location,
    'event_description' => $description,
    'event_time' => $event_time,
    'event_registered' => $event_registered
];
EventRepository::update($data, $id);
header("location: ../index.php?page=event&message=event_updated");
exit;
?>