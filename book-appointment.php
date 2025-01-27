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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <h2 class="card-title text-center mb-4">Book Appointment</h2>
                        <form action="actions/book_appointment_action.php" method="post">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date:</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Time:</label>
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>
                            <div class="mb-3">
                                <label for="reason" class="form-label">Reason:</label>
                                <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>