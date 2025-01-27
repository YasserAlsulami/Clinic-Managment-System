<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php"><?php echo $lang['welcome']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><?php echo $lang['welcome']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php"><?php echo $lang['services']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="book-appointment.php"><?php echo $lang['book_appointment']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php"><?php echo $lang['faq']; ?></a>
                </li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><?php echo $lang['logout']; ?></a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><?php echo $lang['login']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php"><?php echo $lang['register']; ?></a>
                    </li>
                <?php endif; ?>
                <!-- زر تغيير اللغة -->
                <li class="nav-item">
                    <?php if ($_SESSION['lang'] == 'ar'): ?>
                        <a class="nav-link" href="?lang=en">English</a>
                    <?php else: ?>
                        <a class="nav-link" href="?lang=ar">العربية</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>