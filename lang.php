<?php


// تحديد اللغة الافتراضية إذا لم يتم اختيارها
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'ar'; // اللغة الافتراضية: العربية
}

// تغيير اللغة عند الضغط على الزر
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// تحميل النصوص بناءً على اللغة المحددة
if ($_SESSION['lang'] == 'ar') {
    $lang = [
        'welcome' => 'مرحبًا بكم في عيادتنا',
        'services' => 'الخدمات',
        'book_appointment' => 'حجز موعد',
        'faq' => 'الأسئلة الشائعة',
        'login' => 'تسجيل الدخول',
        'register' => 'التسجيل',
        'logout' => 'تسجيل الخروج',
    ];
} else {
    $lang = [
        'welcome' => 'Welcome to Our Clinic',
        'services' => 'Services',
        'book_appointment' => 'Book Appointment',
        'faq' => 'FAQ',
        'login' => 'Login',
        'register' => 'Register',
        'logout' => 'Logout',
    ];
}
?>