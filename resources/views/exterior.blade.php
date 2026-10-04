<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>دهانات خارجية | بصمة اسيل</title>
    <meta name="description"
        content="خدمات الدهانات الخارجية من بصمة اسيل في الرياض - تحسين مظهر الواجهات بألوان وخامات تتحمل عوامل الطقس." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ===== Header ===== -->
    <header class="site-header">
        <div class="container header-inner">
            <a href="/" class="logo">
                <span class="logo-mark"><i class="fa-solid fa-paint-roller"></i></span>
                <span class="logo-text">بصمة اسيل</span>
            </a>
            <nav class="main-nav" id="mainNav">
                <a href="/">الرئيسية</a>
                <a href="{{ route('interior') }}">دهانات داخلية</a>
                <a href="{{ route('exterior') }}" class="active">دهانات خارجية</a>
                <a href="{{ route('decor') }}">ديكورات</a>
                <a href="{{ route('renovation') }}">ترميم</a>
                <a href="/#contact">اتصل بنا</a>
            </nav>
            <button class="nav-toggle" id="navToggle" aria-label="فتح القائمة">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <!-- ===== Hero ===== -->
    <section class="hero">
        <div class="container hero-inner">
            <h1>دهانات خارجية</h1>
            <p>
                تُعد الدهانات الخارجية من العناصر الأساسية في إبراز جمال المبنى وحمايته من عوامل الطقس المختلفة، لذلك
                نقدم
                في بصمة اسيل خدمة دهانات خارجية تهدف إلى إعطاء المباني والفلل والمنازل مظهراً أنيقاً ومتناسقاً. نساعد
                العملاء في اختيار الألوان والتشطيبات المناسبة للواجهات بما يتوافق مع تصميم المبنى والطابع الذي يرغبون في
                الحصول عليه، ويمكن أن يكون تغيير الدهانات الخارجية خياراً مناسباً لتجديد مظهر المبنى وإعطائه شكلاً أكثر
                حداثة وأناقة، ونسعى إلى تقديم تشطيب متناسق يبرز جمال التصميم الخارجي مع عناية بدقة التنفيذ ونتيجة نهائية
                مرضية تدوم لفترة طويلة.
            </p>

            <ul class="feature-list">
                <li><i class="fa-solid fa-circle-check"></i> معالجة الواجهات وتجهيزها قبل الدهان</li>
                <li><i class="fa-solid fa-circle-check"></i> اختيار ألوان وخامات تتحمل عوامل الطقس</li>
                <li><i class="fa-solid fa-circle-check"></i> تنفيذ يبرز تفاصيل التصميم المعماري</li>
                <li><i class="fa-solid fa-circle-check"></i> تشطيب نهائي أنيق يدوم طويلاً</li>
            </ul>

            <div class="hero-actions">
                <a class="btn btn-whatsapp" href="https://wa.me/966557116757" target="_blank" rel="noopener">
                    <i class="fa-brands fa-whatsapp"></i> واتساب
                </a>
                <a class="btn btn-call" href="tel:0557116757">
                    <i class="fa-solid fa-phone"></i> جوال
                </a>
            </div>
        </div>
        <div class="wave-divider"><svg viewBox="0 0 1440 80" preserveAspectRatio="none">
                <path d="M0,40 C 240,90 480,0 720,30 C 960,60 1200,10 1440,40 L1440,80 L0,80 Z"></path>
            </svg></div>
    </section>

    <!-- ===== Gallery ===== -->
    <section class="gallery service-gallery">
        <div class="container">
            <h2 class="section-title reveal">أعمال الدهانات الخارجية</h2>
            <p class="section-sub reveal">مجموعة من أعمال الدهانات الخارجية للفلل والمباني التي نفذناها في الرياض بتشطيب
                متناسق يدوم طويلاً.</p>
            <div class="gallery-grid">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/9.jpg" alt="دهانات خارجية"
                    loading="lazy">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/34.jpg" alt="دهانات خارجية"
                    loading="lazy">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/44.jpg" alt="دهانات خارجية"
                    loading="lazy">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/4.jpg" alt="دهانات خارجية"
                    loading="lazy">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/40.jpg" alt="دهانات خارجية"
                    loading="lazy">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/41.jpg" alt="دهانات خارجية"
                    loading="lazy">
            </div>
        </div>
    </section>

    <!-- ===== Contact CTA ===== -->
    <section class="contact-cta" id="contact">
        <div class="container reveal">
            <h2>تواصل بنا</h2>
            <p>
                هل تبحث عن دهانات خارجية احترافية لواجهة منزلك أو منشأتك؟ بصمة اسيل جاهزة لخدمتك وتنفيذ احتياجاتك
                بعناية.
                تواصل معنا للاستفسار واختيار التشطيب المناسب.
            </p>
            <div class="hero-actions">
                <a class="btn btn-whatsapp" href="https://wa.me/966557116757" target="_blank" rel="noopener">
                    <i class="fa-brands fa-whatsapp"></i> واتساب
                </a>
                <a class="btn btn-call" href="tel:0557116757">
                    <i class="fa-solid fa-phone"></i> جوال
                </a>
            </div>
        </div>
        <div class="wave-divider wave-top"><svg viewBox="0 0 1440 80" preserveAspectRatio="none">
                <path d="M0,40 C 240,0 480,80 720,50 C 960,20 1200,70 1440,40 L1440,0 L0,0 Z"></path>
            </svg></div>
    </section>

    <!-- ===== Footer ===== -->
    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <h3>خدماتنا</h3>
                <ul>
                    <li><a href="{{ route('interior') }}">دهانات داخلية</a></li>
                    <li><a href="{{ route('exterior') }}">دهانات خارجية</a></li>
                    <li><a href="{{ route('decor') }}">ديكورات</a></li>
                    <li><a href="{{ route('renovation') }}">ترميم</a></li>
                </ul>
            </div>
            <div>
                <h3>معلومات التواصل</h3>
                <p>العنوان: المملكة العربية السعودية – الرياض</p>
                <p>للتواصل: <a href="tel:0557116757">0557116757</a></p>
                <a class="footer-social" href="https://wa.me/966557116757" target="_blank" rel="noopener"
                    title="واتساب">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
            <div class="footer-brand">
                <span class="logo-mark"><i class="fa-solid fa-paint-roller"></i></span>
                <p>بصمة اسيل للدهانات والديكورات وترميم المنازل. نسعى دائماً لتلبية احتياجات عملائنا بأعلى معايير الجودة
                    والدقة.</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© بصمة اسيل للدهانات والديكورات وترميم المنازل</p>
        </div>
    </footer>

    <!-- ===== Floating buttons ===== -->
    <a href="https://wa.me/966557116757" target="_blank" rel="noopener" class="float-btn float-whatsapp"
        aria-label="واتساب">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <a href="tel:0557116757" class="float-btn float-call" aria-label="اتصال">
        <i class="fa-solid fa-phone"></i>
    </a>

    <script src="script.js"></script>
</body>

</html>
