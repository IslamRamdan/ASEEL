<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>بصمة اسيل | دهانات وديكورات وترميم منازل بالرياض</title>
    <meta name="description"
        content="بصمة اسيل - دهانات داخلية وخارجية، ديكورات، وترميم منازل في الرياض. للتواصل 0557116757" />
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
                <a href="/" class="active">الرئيسية</a>
                <a href="{{ route('interior') }}">دهانات داخلية</a>
                <a href="{{ route('exterior') }}">دهانات خارجية</a>
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
    <section class="hero" id="top">
        <div class="container hero-inner">
            <h1>بصمة اسيل... لمسة جديدة تغيّر المكان</h1>
            <p>
                في بصمة اسيل نقدم خدمات متكاملة في الدهانات الداخلية والخارجية، الديكورات، وترميم المنازل في الرياض.
                نهتم بكل تفاصيل العمل من تجهيز الأسطح واختيار الألوان والخامات المناسبة إلى تنفيذ التشطيبات بدقة وعناية،
                لنمنح منزلك أو منشأتك مظهراً أنيقاً ومتناسقاً يعكس ذوقك.
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
        <div class="wave-divider"><svg viewBox="0 0 1440 80" preserveAspectRatio="none">
                <path d="M0,40 C 240,90 480,0 720,30 C 960,60 1200,10 1440,40 L1440,80 L0,80 Z"></path>
            </svg></div>
    </section>

    <!-- ===== About ===== -->
    <section class="about">
        <div class="container about-inner">
            <div class="about-photo" id="aboutSlideshow">
                <img class="slide active" src="https://alwanaldhel.com/wp-content/uploads/2026/08/4.jpg"
                    alt="من أعمال بصمة اسيل" loading="lazy" />
                <img class="slide" src="https://alwanaldhel.com/wp-content/uploads/2026/08/37.jpg"
                    alt="من أعمال بصمة اسيل" loading="lazy" />
                <img class="slide" src="https://alwanaldhel.com/wp-content/uploads/2026/08/16.jpg"
                    alt="من أعمال بصمة اسيل" loading="lazy" />
                <img class="slide" src="https://alwanaldhel.com/wp-content/uploads/2026/08/IMG-20260829-WA0097.jpg"
                    alt="من أعمال بصمة اسيل" loading="lazy" />
            </div>
            <div class="about-text reveal">
                <h2>من نحن</h2>
                <p>
                    نحن في بصمة اسيل متخصصون في تقديم خدمات الدهانات والديكورات وترميم المنازل في الرياض.
                    نعمل على تجديد المساحات وتحسين مظهرها من خلال حلول عملية وأفكار متنوعة تناسب المنازل والفلل والشقق
                    والمنشآت.
                    نهتم باختيار الألوان والتشطيبات المناسبة لكل مساحة، مع تنفيذ الأعمال بعناية ودقة والحرص على جودة
                    التفاصيل
                    من البداية حتى النهاية.
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
        </div>
    </section>

    <!-- ===== Services ===== -->
    <section class="services" id="services">
        <div class="wave-divider wave-top"><svg viewBox="0 0 1440 80" preserveAspectRatio="none">
                <path d="M0,40 C 240,0 480,80 720,50 C 960,20 1200,70 1440,40 L1440,0 L0,0 Z"></path>
            </svg></div>
        <div class="container">
            <h2 class="section-title reveal">خدماتنا</h2>
            <p class="section-sub reveal">
                نقدم في بصمة اسيل مجموعة متكاملة من خدمات الدهانات والديكورات وترميم المنازل في الرياض، بجودة تشطيب
                وتناسق ألوان ودقة تفاصيل تلبي احتياجات عملائنا.
            </p>

            <div class="service-cards">
                <article class="card reveal" id="داخلية">
                    <div class="card-photo">
                        <img src="https://alwanaldhel.com/wp-content/uploads/2026/08/6.jpg" alt="دهانات داخلية"
                            loading="lazy" />
                    </div>
                    <div class="card-body">
                        <h3>دهانات داخلية</h3>
                        <p>نقدم خدمات الدهانات الداخلية باحترافية عالية لتحويل المساحات الداخلية إلى أماكن أنيقة ومريحة
                            تعكس ذوقك،
                            مع اختيار الألوان والتشطيبات المناسبة للجدران والأسقف بما يتوافق مع طبيعة المكان واحتياجاتك.
                        </p>
                        <a href="{{ route('interior') }}" class="card-link">مشاهدة المزيد</a>
                    </div>
                </article>

                <article class="card reveal" id="خارجية">
                    <div class="card-photo">
                        <img src="https://alwanaldhel.com/wp-content/uploads/2026/08/9.jpg" alt="دهانات خارجية"
                            loading="lazy" />
                    </div>
                    <div class="card-body">
                        <h3>دهانات خارجية</h3>
                        <p>نحسّن مظهر الواجهات ونمنحها لمسة عصرية تعكس جمال المكان، مع الحرص على جودة التنفيذ ودقة
                            التفاصيل
                            واختيار الألوان التي تتوافق مع تصميم المبنى وطبيعة الواجهة للحصول على تشطيب يدوم طويلاً.</p>
                        <a href="{{ route('exterior') }}" class="card-link">مشاهدة المزيد</a>
                    </div>
                </article>

                <article class="card reveal" id="ديكورات">
                    <div class="card-photo">
                        <img src="https://alwanaldhel.com/wp-content/uploads/2026/08/45.jpg" alt="ديكورات"
                            loading="lazy" />
                    </div>
                    <div class="card-body">
                        <h3>ديكورات</h3>
                        <p>نضيف لمسة جمالية وعصرية على المساحات الداخلية والخارجية، ونساعدك في اختيار الشكل والتشطيب
                            المناسب
                            بما يتوافق مع تصميم المكان وذوقك، مع الاهتمام بجودة الخامات ودقة التنفيذ.</p>
                        <a href="{{ route('decor') }}" class="card-link">مشاهدة المزيد</a>
                    </div>
                </article>

                <article class="card reveal" id="ترميم">
                    <div class="card-photo">
                        <img src="https://alwanaldhel.com/wp-content/uploads/2026/08/37.jpg" alt="ترميم"
                            loading="lazy" />
                    </div>
                    <div class="card-body">
                        <h3>ترميم</h3>
                        <p>نعالج الأجزاء التي تحتاج إلى إصلاح وتجديد لإعادة المظهر المرتب للمكان، سواء كانت ترميمات
                            للجدران
                            والأسقف أو تجديدات مرتبطة بالدهانات والتشطيبات، بتنفيذ منظم ونتيجة تدوم طويلاً.</p>
                        <a href="{{ route('renovation') }}" class="card-link">مشاهدة المزيد</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- ===== Gallery ===== -->
    <section class="gallery">
        <div class="container">
            <h2 class="section-title reveal">معرض أعمالنا في الرياض</h2>
            <p class="section-sub reveal">نفخر بتقديم مجموعة متنوعة من أعمال الدهانات والتشطيبات التي تلبي احتياجات
                عملائنا،
                ونحرص في كل مشروع على تقديم نتائج تجمع بين الجودة والدقة والجمال.</p>

            <div class="gallery-grid">
                <img class="reveal" src="images/img1.jpeg" alt="عمل ترميم" loading="lazy">
                <img class="reveal" src="images/img2.jpeg" alt="عمل دهانات خارجية" loading="lazy">
                <img class="reveal" src="images/img3.jpeg" alt="عمل ديكورات" loading="lazy">
                <img class="reveal" src="images/img4.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img5.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img6.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img7.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img8.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img9.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img10.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img11.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img12.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img13.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img14.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img15.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img16.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img17.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img18.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img19.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img20.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img22.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img23.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img24.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img25.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img26.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img27.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img28.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img29.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img30.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img31.jpeg" alt="من أعمالنا" loading="lazy">
                <img class="reveal" src="images/img32.jpeg" alt="من أعمالنا" loading="lazy">

            </div>
        </div>
    </section>
    <!-- ===== Contact CTA ===== -->
    <section class="contact-cta" id="contact">
        <div class="container reveal">
            <h2>تواصل بنا</h2>
            <p>
                هل تبحث عن دهانات احترافية أو تشطيبات مميزة لمنزلك أو منشأتك؟ بصمة اسيل جاهزة لخدمتك وتنفيذ احتياجاتك
                بعناية. تواصل معنا للاستفسار عن الدهانات الداخلية والخارجية، الديكورات وترميم المنازل.
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
                    <li><a href="#داخلية">دهانات داخلية</a></li>
                    <li><a href="#خارجية">دهانات خارجية</a></li>
                    <li><a href="#ديكورات">ديكورات</a></li>
                    <li><a href="#ترميم">ترميم</a></li>
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
            <p class="designer-credit">
                تصميم وتنفيذ
                <a href="https://www.facebook.com/share/18WCirXz8U/" target="_blank" style="text-decoration: none;">
                    <span class="gmt-text" style="color: var(--white); font-weight: bold;">Devora-web</span>
                </a>
            </p>
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
