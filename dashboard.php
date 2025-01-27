<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <a href="book-appointment.php" class="btn btn-primary btn-lg me-3">Book Appointment</a>
                <a href="my-appointments.php" class="btn btn-secondary btn-lg">My Appointments</a>
            </div>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>