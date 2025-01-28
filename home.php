<?php
session_start();
include '../config/db.php';

$user_id = $_SESSION['user_id'];
$date = $_POST['date'];
$time = $_POST['time'];
$reason = $_POST['reason'];

$sql = "INSERT INTO appointments (user_id, date, time, reason) VALUES ('$user_id', '$date', '$time', '$reason')";
if ($conn->query($sql) === TRUE) {
    header('Location: ../my-appointments.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>