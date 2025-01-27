<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['user_id']) || !isset($_GET['id'])) {
    header("Location: ../login.php");
    exit();
}

$appointment_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// Delete the appointment
$stmt = $conn->prepare("DELETE FROM appointments WHERE id = ? AND user_id = ?");
if ($stmt->execute([$appointment_id, $user_id])) {
    header("Location: ../my-appointments.php");
    exit();
} else {
    echo "Failed to cancel the appointment.";
}
?>
