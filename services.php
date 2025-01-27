<?php
session_start();
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">خدماتنا الطبية</h2>
        <p class="text-center mb-5">نقدم لكم مجموعة واسعة من الخدمات الطبية بجودة عالية واهتمام فائق.</p>

        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow">
                    <div class="card-body">
                        <i class="fas fa-stethoscope fa-3x mb-3 text-primary"></i>
                        <h4 class="card-title">الفحوصات العامة</h4>
                        <p class="card-text">فحوصات طبية شاملة لتقييم الحالة الصحية العامة.</p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow">
                    <div class="card-body">
                        <i class="fas fa-heartbeat fa-3x mb-3 text-primary"></i>
                        <h4 class="card-title">الاستشارات الطبية</h4>
                        <p class="card-text">استشارات مع أطباء متخصصين في مختلف المجالات الطبية.</p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow">
                    <div class="card-body">
                        <i class="fas fa-vial fa-3x mb-3 text-primary"></i>
                        <h4 class="card-title">التحاليل المخبرية</h4>
                        <p class="card-text">تحاليل دقيقة لتشخيص الأمراض ومتابعة الحالات الصحية.</p>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow">
                    <div class="card-body">
                        <i class="fas fa-baby fa-3x mb-3 text-primary"></i>
                        <h4 class="card-title">رعاية الأم والطفل</h4>
                        <p class="card-text">رعاية متخصصة للأمهات والأطفال من قبل فريق طبي متميز.</p>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow">
                    <div class="card-body">
                        <i class="fas fa-x-ray fa-3x mb-3 text-primary"></i>
                        <h4 class="card-title">الأشعة والتصوير</h4>
                        <p class="card-text">خدمات تصوير طبي متقدمة لتشخيص دقيق وسريع.</p>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow">
                    <div class="card-body">
                        <i class="fas fa-pills fa-3x mb-3 text-primary"></i>
                        <h4 class="card-title">الصيدلية الطبية</h4>
                        <p class="card-text">توفير الأدوية والعلاجات بأسعار مناسبة.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>