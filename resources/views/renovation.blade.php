<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ترميم | بصمة اسيل</title>
    <meta name="description"
        content="خدمات ترميم المنازل من بصمة اسيل في الرياض - معالجة الجدران والأسقف والأرضيات وإعادة المظهر المرتب للمكان." />
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
                <a href="{{ route('exterior') }}">دهانات خارجية</a>
                <a href="{{ route('decor') }}">ديكورات</a>
                <a href="{{ route('renovation') }}" class="active">ترميم</a>
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
            <h1>ترميم</h1>
            <p>
                نقدم في بصمة اسيل خدمات ترميم المنازل لمعالجة الأجزاء التي تحتاج إلى إصلاح وتجديد، وإعادة المظهر المرتب
                للمكان. نهتم بتحديد الأعمال المطلوبة وتنفيذها بشكل منظم، سواء كانت ترميمات للجدران والأسقف، أو معالجة
                الشروخ والرطوبة، أو تجديدات مرتبطة بالدهانات والتشطيبات والأرضيات. نحرص على تجهيز الأسطح وتنفيذ طبقات
                الترميم بعناية للحصول على تشطيب متجانس وسلس، بما يناسب مختلف المساحات والاحتياجات، سواء كنت ترغب في
                تجديد أرضيات المنزل أو تجهيز مساحة تجارية أو تحسين مظهر أرضيات المنشآت، نسعى لتقديم نتيجة تجمع بين
                الجمال
                والمتانة ودقة التنفيذ.
            </p>

            <ul class="feature-list">
                <li><i class="fa-solid fa-circle-check"></i> معالجة الشروخ والرطوبة في الجدران والأسقف</li>
                <li><i class="fa-solid fa-circle-check"></i> ترميم وتجديد الأرضيات بتشطيبات متينة</li>
                <li><i class="fa-solid fa-circle-check"></i> إعادة الدهان والتشطيب بعد الترميم</li>
                <li><i class="fa-solid fa-circle-check"></i> تنفيذ منظم ونتيجة نهائية تدوم طويلاً</li>
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
            <h2 class="section-title reveal">أعمال الترميم</h2>
            <p class="section-sub reveal">مجموعة من أعمال الترميم والأرضيات التي نفذناها لعملائنا في الرياض بمتانة وجودة
                عالية.</p>
            <div class="gallery-grid">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/37.jpg" alt="ترميم"
                    loading="lazy">
                <img class="reveal"
                    src="https://alwanaldhel.com/wp-content/uploads/2026/08/Epoxy-in-Parking-768x1024-1.webp"
                    alt="ترميم" loading="lazy">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/50.jpg" alt="ترميم"
                    loading="lazy">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/51.jpg" alt="ترميم"
                    loading="lazy">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/52.jpg" alt="ترميم"
                    loading="lazy">
                <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/53.jpg" alt="ترميم"
                    loading="lazy">
            </div>
        </div>
    </section>

    <!-- ===== Contact CTA ===== -->
    <section class="contact-cta" id="contact">
        <div class="container reveal">
            <h2>تواصل بنا</h2>
            <p>
                هل تحتاج إلى ترميم أو تجديد لمنزلك أو منشأتك؟ بصمة اسيل جاهزة لخدمتك وتنفيذ احتياجاتك بعناية.
                تواصل معنا للاستفسار وتقييم الأعمال المطلوبة.
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
