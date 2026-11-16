<?php include '../config/config.php'; ?>
<?php include '../classes/Page.php'; ?>
<?php include '../classes/Event.php'; ?>
<?php include '../classes/Organization.php'; ?>

<?php include '../repositories/IEventRepository.php'; ?>
<?php include '../repositories/DBRepository.php'; ?>
<?php include '../repositories/EventRepository.php'; ?>

<?php
$event_id = $_POST['event_id'];
$event_code = $_POST['event_code'];
$event_name = $_POST['event_name'];
$event_description = $_POST['event_description'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];
$event_registered = $_POST['event_registered'];
EventRepository::create([
    'event_id' => $event_id,
    'event_code' => $event_code,
    'event_name' => $event_name,
    'event_description' => $event_description,
    'event_date' => $event_date,
    'event_time' => $event_time,
    'event_registered' => $event_registered,
]);

header("location: ../index.php?page=events");
exit;
?>