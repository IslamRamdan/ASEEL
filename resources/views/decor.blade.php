<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ديكورات | بصمة اسيل</title>
    <meta name="description"
        content="خدمات الديكورات من بصمة اسيل في الرياض - لمسات جمالية وعصرية للمساحات الداخلية والخارجية." />
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
                <a href="{{ route('decor') }}" class="active">ديكورات</a>
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
            <h1>ديكورات</h1>
            <p>
                نقدم في بصمة اسيل خدمات الديكورات باحترافية عالية لإضفاء لمسة جمالية وعصرية على المساحات الداخلية
                والخارجية. نحرص على تنفيذ الديكورات بدقة وعناية للحصول على تشطيب متناسق ومظهر أنيق يبرز جمال المكان
                ويمنحه طابعاً مميزاً. نساعدك في اختيار الشكل والتشطيب المناسب بما يتوافق مع تصميم المكان وذوقك، مع
                الاهتمام بجودة الخامات ودقة التنفيذ لتحقيق نتيجة احترافية تدوم طويلاً، سواء كنت ترغب في ديكورات جبس
                وأسقف، جدران مميزة، أو لمسات تصميمية تضيف طابعاً خاصاً على منزلك أو منشأتك.
            </p>

            <ul class="feature-list">
                <li><i class="fa-solid fa-circle-check"></i> تصاميم جبس وأسقف عصرية</li>
                <li><i class="fa-solid fa-circle-check"></i> لمسات جدران وديكورات مميزة</li>
                <li><i class="fa-solid fa-circle-check"></i> اختيار خامات وتشطيبات عالية الجودة</li>
                <li><i class="fa-solid fa-circle-check"></i> تنسيق الديكور مع باقي عناصر المكان</li>
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
            <h2 class="section-title reveal">أعمال الديكورات</h2>
            <p class="section-sub reveal">مجموعة من أعمال الديكورات التي نفذناها لعملائنا في الرياض بلمسات عصرية
                ومتناسقة.</p>
            <div class="gallery-grid">
                @foreach ($works as $work)
                    <img src="{{ asset('storage/' . $work->file_path) }}" alt="{{ $work->title }}" loading="lazy">
                @endforeach
                {{-- <img class="reveal" src="https://alwanaldhel.com/wp-content/uploads/2026/08/45.jpg" alt="ديكورات"
                    loading="lazy"> --}}

            </div>
        </div>
    </section>

    <!-- ===== Contact CTA ===== -->
    <section class="contact-cta" id="contact">
        <div class="container reveal">
            <h2>تواصل بنا</h2>
            <p>
                هل تبحث عن ديكورات مميزة تضيف لمسة جمالية لمنزلك أو منشأتك؟ بصمة اسيل جاهزة لخدمتك وتنفيذ احتياجاتك
                بعناية.
                تواصل معنا للاستفسار واختيار التصميم المناسب.
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
