<?php
session_start();
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4"><?php echo $lang['contact']; ?></h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <form action="actions/contact_action.php" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label"><?php echo $lang['name']; ?>:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><?php echo $lang['email']; ?>:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label"><?php echo $lang['message']; ?>:</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100"><?php echo $lang['submit']; ?></button>
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