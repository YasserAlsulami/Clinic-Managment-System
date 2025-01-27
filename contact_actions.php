<?php
session_start();
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // إدخال البيانات في قاعدة البيانات
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "تم إرسال رسالتك بنجاح!";
    } else {
        $_SESSION['message'] = "حدث خطأ أثناء إرسال الرسالة.";
    }

    header('Location: ../contact.php');
    exit();
}
?>