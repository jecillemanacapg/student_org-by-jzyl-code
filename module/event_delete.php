<?php include '../config/config.php'; ?>
<?php include '../classes/Page.php'; ?>
<?php include '../classes/Record.php'; ?>
<?php include '../classes/Event.php'; ?>
<?php include '../classes/Organization.php'; ?>

<?php include '../repositories/IEventRepository.php'; ?>
<?php include '../repositories/DBRepository.php'; ?>
<?php include '../repositories/EventRepository.php'; ?>

<?php
$id = $_GET['id'];
EventRepository::delete($id);
header("location: ../index.php?page=event&message=event_deleted");