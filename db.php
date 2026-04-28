<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'cafe';

$connection = mysqli_connect($hostname, $username, $password);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

mysqli_query($connection, "CREATE DATABASE IF NOT EXISTS `$database`");
mysqli_select_db($connection, $database);

$bookingTableSql = "
CREATE TABLE IF NOT EXISTS table_booking (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    tableNumber INT NOT NULL,
    people INT NOT NULL,
    booking_date DATE NOT NULL,
    booking_time TIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

mysqli_query($connection, $bookingTableSql);
?>
