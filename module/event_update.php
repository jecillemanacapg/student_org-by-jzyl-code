<?php
include '../config/config.php';
include '../classes/Page.php';
include '../classes/Event.php';
include '../classes/Organization.php';

include '../repositories/IEventRepository.php';
include '../repositories/DBRepository.php';
include '../repositories/EventRepository.php';

$id = $_GET['id'];
$event_id = $_POST['event_id'];
$event_name = $_POST['event_name'];
$event_date = $_POST['event_date'];
$event_location = $_POST['event_location'];
$event_time = $_POST['event_time'];
$event_registered = $_POST['event_registered'];
$event_description = $_POST['event_description'];
$description = $_POST['org_description'];
$member_count = $_POST['member_count'];
$data = [
    'event_id' => $event_id,
    'event_name' => $event_name,
    'event_date' => $event_date,
    'event_location' => $event_location,
    'event_time' => $event_time,
    'event_registered' => $event_registered,
    'event_description' => $event_description
];
EventRepository::update($data, $id);
header("location: ../index.php?page=events");
exit;
?>