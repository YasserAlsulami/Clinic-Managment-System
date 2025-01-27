<?php
session_start();
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>مرحبًا بكم في عيادتنا</h1>
        <p>نقدم لكم أفضل الخدمات الطبية بجودة عالية واهتمام فائق.</p>
        <a href="book-appointment.php" class="btn btn-primary btn-lg">احجز موعدك الآن</a>
    </div>
</section>

<!-- Main Content -->
<main class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-stethoscope fa-3x mb-3 text-primary"></i>
                <h3>فحوصات طبية دقيقة</h3>
                <p>نقدم فحوصات طبية دقيقة باستخدام أحدث التقنيات.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-user-md fa-3x mb-3 text-primary"></i>
                <h3>أطباء متخصصون</h3>
                <p>فريقنا من الأطباء المتخصصين جاهز لمساعدتك.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-calendar-check fa-3x mb-3 text-primary"></i>
                <h3>حجز موعد بسهولة</h3>
                <p>احجز موعدك بسهولة عبر موقعنا الإلكتروني.</p>
            </div>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>
