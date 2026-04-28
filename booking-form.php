<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#booking');
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$tableNumber = (int) ($_POST['tableNumber'] ?? 0);
$people = (int) ($_POST['people'] ?? 0);
$bookingDate = $_POST['booking_date'] ?? '';
$bookingTime = $_POST['booking_time'] ?? '';

if ($name === '' || $phone === '' || $tableNumber < 1 || $people < 1 || $bookingDate === '' || $bookingTime === '') {
    header('Location: index.php?booking=invalid#booking');
    exit;
}

$stmt = $connection->prepare(
    'INSERT INTO table_booking (name, phone, tableNumber, people, booking_date, booking_time) VALUES (?, ?, ?, ?, ?, ?)'
);
$stmt->bind_param('ssiiss', $name, $phone, $tableNumber, $people, $bookingDate, $bookingTime);

if ($stmt->execute()) {
    header('Location: index.php?booking=success#booking');
    exit;
}

header('Location: index.php?booking=error#booking');
exit;
?>
