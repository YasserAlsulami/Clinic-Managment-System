<?php
session_start();
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">الأسئلة الشائعة</h2>
        <div class="accordion" id="faqAccordion">
            <!-- Question 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        كيف يمكنني حجز موعد في العيادة؟
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        يمكنك حجز موعد بسهولة من خلال زيارة صفحة <a href="book-appointment.php">حجز الموعد</a> وملء النموذج المطلوب. سيتم تأكيد الحجز عبر البريد الإلكتروني أو الهاتف.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ما هي الخدمات التي تقدمها العيادة؟
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        نقدم مجموعة واسعة من الخدمات الطبية، بما في ذلك الفحوصات العامة، الاستشارات الطبية، التحاليل المخبرية، والعلاجات التخصصية. يمكنك الاطلاع على <a href="services.php">صفحة الخدمات</a> لمزيد من التفاصيل.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        هل يمكنني إلغاء أو تغيير موعدي؟
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        نعم، يمكنك إلغاء أو تغيير موعدك من خلال صفحة <a href="my-appointments.php">مواعيدي</a> أو عن طريق الاتصال بنا مباشرة.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ما هي ساعات عمل العيادة؟
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        العيادة تعمل من الساعة 8 صباحًا حتى 8 مساءً من الأحد إلى الخميس. يوم الجمعة والسبت هي أيام إجازة.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        هل تتوفر خدمة الطوارئ؟
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        نعم، لدينا خدمة طوارئ متاحة على مدار الساعة. يمكنك الاتصال بنا على الرقم <strong>123-456-7890</strong> في حالة الطوارئ.
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        هل يمكنني الحصول على تقرير طبي بعد الزيارة؟
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        نعم، يمكنك طلب تقرير طبي بعد الزيارة. سيتم إعداد التقرير وإرساله إليك عبر البريد الإلكتروني أو تسليمه يدويًا حسب رغبتك.
                    </div>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        ما هي طرق الدفع المتاحة؟
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        نقبل الدفع نقدًا وبالبطاقات الائتمانية (فيزا، ماستركارد). كما يمكنك الدفع عبر التحويل البنكي.
                    </div>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        هل يمكنني الحصول على استشارة طبية عبر الهاتف؟
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        نعم، نقدم خدمة الاستشارات الطبية عبر الهاتف. يمكنك الاتصال بنا على الرقم <strong>123-456-7890</strong> للحصول على استشارة.
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>