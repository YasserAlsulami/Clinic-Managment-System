<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
include 'includes/header.php';
include 'includes/navbar.php';
include 'config/db.php';

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM appointments WHERE user_id = $user_id";
$result = $conn->query($sql);
?>

<main class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">My Appointments</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Reason</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['reason']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>