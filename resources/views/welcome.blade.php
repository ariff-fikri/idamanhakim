<!DOCTYPE html>
<html lang="ms">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title & Description ======-->
        <title>Idaman Hakim Enterprise | Rakan Niaga & Pembekalan Berdaftar MOF di Sepang &amp; Putrajaya</title>
        <meta name="description" content="Idaman Hakim Enterprise - rakan niaga & pembekalan yang dipercayai agensi kerajaan, institusi pendidikan dan syarikat korporat di Sepang & Putrajaya. Berdaftar dalam 30 bidang di bawah Kementerian Kewangan (MOF). Hubungi kami untuk sebut harga percuma.">
        <meta name="keywords" content="pembekal berdaftar MOF, rakan niaga kerajaan Sepang, syarikat pembekalan Putrajaya, kontraktor pembekalan MOF Selangor, pemasangan langsir korporat, katering dan pengurusan acara Sepang">
        <meta name="author" content="Idaman Hakim Enterprise">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="theme-color" content="#1A2744">
        <meta name="geo.region" content="MY-16">
        <meta name="geo.placename" content="Putrajaya">
        <meta name="geo.position" content="2.9264;101.6964">
        <meta name="ICBM" content="2.9264, 101.6964">
        <link rel="canonical" href="{{ url()->current() }}">
        <!--====== Open Graph / Facebook ======-->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Idaman Hakim Enterprise">
        <meta property="og:locale" content="ms_MY">
        <meta property="og:title" content="Idaman Hakim Enterprise | Rakan Niaga & Pembekalan Berdaftar MOF di Sepang & Putrajaya">
        <meta property="og:description" content="Rakan niaga & pembekalan yang dipercayai agensi kerajaan, institusi pendidikan dan syarikat korporat. Berdaftar dalam 30 bidang MOF, beroperasi di Sepang & Putrajaya, Malaysia.">
        <meta property="og:image" content="{{ asset('assets/logo/Logo_Idaman-01.png') }}">
        <meta property="og:image:alt" content="Logo Idaman Hakim Enterprise">
        <meta property="og:url" content="{{ url()->current() }}">
        <!--====== Twitter Card ======-->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Idaman Hakim Enterprise | Rakan Niaga & Pembekalan Berdaftar MOF">
        <meta name="twitter:description" content="Rakan niaga & pembekalan yang dipercayai agensi kerajaan, institusi pendidikan dan syarikat korporat di Sepang & Putrajaya. Berdaftar dalam 30 bidang MOF.">
        <meta name="twitter:image" content="{{ asset('assets/logo/Logo_Idaman-01.png') }}">
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('assets/logo/Logo_Idaman-01.png') }}" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
        <!--====== Magnific-popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
        <!--====== Aos css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/spacings.css') }}">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <style>
            :root {
                --primary-color: #C9A24B;
                --secondary-color: #C9A24B;
                --primary-black-color: #1A2744;
                --heading-color: #1A2744;
            }
            .brand-logo img { height: 60px; width: auto; }
            .footer-logo img { height: 60px; width: auto; }
            .preloader .loading, .preloader .loading-wrapper { width: 140px; height: 140px; }
            .preloader .loading-wrapper #loading-icon img { width: 90px; }
            .bizzen-counter_one:after {
                background: linear-gradient(270deg, rgba(26,39,68,0.6) 0%, var(--primary-black-color) 90.05%) !important;
            }
            .navy-texture-bg {
                background-color: var(--primary-black-color);
                position: relative;
            }
            .navy-texture-img {
                position: absolute;
                top: 0; left: 0; right: 0; bottom: 0;
                background-image: url({{ asset('assets/images/home-one/hero/hero-bg.jpg') }});
                background-size: cover;
                background-position: center;
                filter: hue-rotate(41deg);
                z-index: -2;
            }
            .mof-card {
                background: linear-gradient(160deg, rgba(255,255,255,0.06) 0%, rgba(255,255,255,0.02) 100%);
                border: 1px solid rgba(255,255,255,0.1);
                border-radius: 12px;
                padding: 40px 35px;
                height: 100%;
                transition: all 0.35s ease;
            }
            .mof-card:hover {
                background: linear-gradient(160deg, rgba(194,223,147,0.12) 0%, rgba(255,255,255,0.02) 100%);
                border-color: var(--primary-color, #C2DF93);
                transform: translateY(-6px);
            }
            .mof-card-icon {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background: var(--primary-color, #C2DF93);
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 24px;
                flex-shrink: 0;
            }
            .mof-card-icon i { color: var(--primary-black-color, #063232); font-size: 22px; }
            .mof-group-title { color: var(--white-color, #fff); margin-bottom: 20px; }
            .mof-list { list-style: none; padding: 0; margin: 0; display: flex; flex-wrap: wrap; gap: 8px; }
            .mof-list li {
                font-size: 13px;
                color: rgba(255,255,255,0.85);
                background: rgba(255,255,255,0.07);
                border: 1px solid rgba(255,255,255,0.12);
                border-radius: 30px;
                padding: 6px 14px;
                line-height: 1.4;
            }
            .bizzen-hero_one .hero-image img { width: 100%; max-height: 480px; object-fit: cover; }
            .bizzen-about_one .bizzen-image img { width: 100%; aspect-ratio: 410/504; object-fit: cover; }
            .bizzen-project-item.style-one .project-inner { min-height: 380px; }
            .bizzen-team-item.style-one .member-image img { width: 100%; aspect-ratio: 1/1; object-fit: cover; }
            .bizzen-testimonial-item.style-one .author-thumb img { width: 60px; height: 60px; object-fit: cover; border-radius: 50%; }
            .bizzen-blog-post-item.style-one .post-thumbnail img { width: 100%; aspect-ratio: 4/3; object-fit: cover; }
            [data-aos] { opacity: 1 !important; transform: none !important; visibility: visible !important; }
            .gov-footer { background-color: var(--primary-black-color); }
            .gov-footer .footer-widget-wrapper { padding: 60px 0 40px; }
            .gov-footer .footer-logo img { height: 55px; width: auto; }
            .gov-footer .footer-about-widget p { color: rgba(255,255,255,0.75); font-size: 14px; line-height: 1.7; }
            .gov-footer .widget-title { color: #fff; font-size: 16px; font-weight: 700; margin-bottom: 18px; text-transform: uppercase; letter-spacing: 0.5px; }
            .gov-footer-list { list-style: none; margin: 0; padding: 0; }
            .gov-footer-list li { margin-bottom: 12px; color: rgba(255,255,255,0.75); font-size: 14px; }
            .gov-footer-list li a { color: rgba(255,255,255,0.75); text-decoration: none; }
            .gov-footer-list li a:hover { color: var(--secondary-color); }
            .gov-footer .copyright-area { border-top: 1px solid rgba(255,255,255,0.12); padding: 20px 0; }
            .gov-footer .copyright-text p { color: rgba(255,255,255,0.6); font-size: 13px; margin: 0; }
            .gov-footer .copyright-link a { color: rgba(255,255,255,0.6); font-size: 13px; margin-left: 20px; text-decoration: none; }
            .gov-footer .copyright-link a:hover { color: var(--secondary-color); }
            @media (max-width: 767.98px) {
                .gov-footer .copyright-link a { margin: 0 10px; }
            }
            .sub-title:after { display: none; }
            .logo-placeholder {
                width: 100%;
                aspect-ratio: 1/1;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 10px;
                background: #F6F6F6;
                border: 2px dashed #D8DDE1;
                border-radius: 8px;
                color: #A6ACB4;
            }
            .logo-placeholder i { font-size: 28px; }
            .logo-placeholder span { font-size: 13px; font-weight: 500; }
            .entity-logo-marquee {
                overflow: hidden;
                position: relative;
                -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 8%, #000 92%, transparent 100%);
                mask-image: linear-gradient(90deg, transparent 0, #000 8%, #000 92%, transparent 100%);
            }
            .entity-logo-track {
                display: flex;
                align-items: center;
                width: max-content;
                gap: 70px;
                animation: entity-logo-scroll 30s linear infinite;
            }
            .entity-logo-marquee:hover .entity-logo-track { animation-play-state: paused; }
            .entity-logo-box {
                flex: 0 0 auto;
                display: flex;
                align-items: center;
                justify-content: center;
                filter: grayscale(100%);
                opacity: 0.65;
                transition: filter 0.3s ease, opacity 0.3s ease;
            }
            .entity-logo-box:hover {
                filter: grayscale(0%);
                opacity: 1;
            }
            .entity-logo-box img {
                height: 70px;
                width: auto;
                object-fit: contain;
            }
            @keyframes entity-logo-scroll {
                from { transform: translateX(0); }
                to { transform: translateX(-50%); }
            }
            @media (max-width: 767.98px) {
                .entity-logo-track { gap: 45px; }
                .entity-logo-box img { height: 50px; }
            }
            @media (prefers-reduced-motion: reduce) {
                .entity-logo-track { animation: none; }
            }
            .work-gallery {
                position: relative;
                z-index: 1;
                display: flex;
                align-items: flex-start;
                gap: 14px;
            }
            .work-gallery .gallery-col {
                flex: 1 1 0;
                display: flex;
                flex-direction: column;
                gap: 14px;
                min-width: 0;
            }
            .gallery-item {
                display: block;
                position: relative;
                border-radius: 8px;
                overflow: hidden;
            }
            .gallery-item img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                transition: transform 0.4s ease;
            }
            .gallery-item:hover img { transform: scale(1.08); }
            .gallery-overlay {
                position: absolute;
                inset: 0;
                background: rgba(26,39,68,0.55);
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity 0.3s ease;
            }
            .gallery-item:hover .gallery-overlay { opacity: 1; }
            .gallery-overlay i { color: var(--secondary-color); font-size: 22px; }
            .gallery-toggle-wrap { margin-top: 40px; }
        </style>
        <!--====== Structured Data (JSON-LD) ======-->
        @php
            $orgId = url('/').'/#organization';
            $jsonLd = [
                '@context' => 'https://schema.org',
                '@graph' => [
                    [
                        '@type' => ['GeneralContractor', 'LocalBusiness'],
                        '@id' => $orgId,
                        'name' => 'Idaman Hakim Enterprise',
                        'legalName' => 'Idaman Hakim Enterprise (002846778-U / 201803217854)',
                        'taxID' => '201803217854',
                        'url' => url('/'),
                        'logo' => asset('assets/logo/Logo_Idaman-01.png'),
                        'image' => asset('assets/logo/Logo_Idaman-01.png'),
                        'email' => 'idamanhakim.my@gmail.com',
                        'telephone' => '+60193127345',
                        'description' => 'Rakan niaga & pembekalan yang dipercayai agensi kerajaan, institusi pendidikan dan syarikat korporat. Berdaftar dalam 30 bidang di bawah Kementerian Kewangan Malaysia (MOF).',
                        'priceRange' => 'RM',
                        'currenciesAccepted' => 'MYR',
                        'address' => [
                            '@type' => 'PostalAddress',
                            'streetAddress' => '1A, Jalan Diplomatik 2, Presint 15',
                            'postalCode' => '62050',
                            'addressLocality' => 'Putrajaya',
                            'addressRegion' => 'Wilayah Persekutuan Putrajaya',
                            'addressCountry' => 'MY',
                        ],
                        'areaServed' => [
                            ['@type' => 'City', 'name' => 'Sepang'],
                            ['@type' => 'City', 'name' => 'Putrajaya'],
                        ],
                        'openingHoursSpecification' => [
                            [
                                '@type' => 'OpeningHoursSpecification',
                                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                                'opens' => '08:30',
                                'closes' => '22:00',
                            ],
                        ],
                        'sameAs' => [
                            'https://www.facebook.com/moriproduction/',
                        ],
                        'hasOfferCatalog' => [
                            '@type' => 'OfferCatalog',
                            'name' => 'Perkhidmatan Idaman Hakim Enterprise',
                            'itemListElement' => [
                                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Pembekalan Agensi Kerajaan & Korporat']],
                                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Fabrikasi & Pemasangan Papan Tanda']],
                                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Pemasangan Langsir & Kabinet']],
                                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Katering & Pengurusan Acara Majlis']],
                                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Penghantaran & Pembekalan Produk']],
                            ],
                        ],
                    ],
                    [
                        '@type' => 'WebSite',
                        '@id' => url('/').'/#website',
                        'url' => url('/'),
                        'name' => 'Idaman Hakim Enterprise',
                        'inLanguage' => 'ms-MY',
                        'publisher' => ['@id' => $orgId],
                    ],
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loading-wrapper">
                <div class="loading"></div>
                <div id="loading-icon"><img src="{{ asset('assets/logo/Logo_Idaman-01.png') }}" alt="Idaman Hakim Enterprise"></div>
            </div>
        </div><!--====== End Preloader ======-->
        <!--====== Start Overlay ======-->
        <div class="offcanvas__overlay"></div>
        <!--=== Start  Header Area  ===-->
        <header class="header-area header-one">
            <!--====  Navigasi Header  ===-->
            <div class="header-navigation">
                <div class="container-fluid">
                    <!--====  Primary Menu  ===-->
                    <div class="primary-menu">
                        <!--====  Site Branding  ===-->
                        <div class="site-branding">
                            <a href="#" class="brand-logo"><img src="{{ asset('assets/logo/Logo_Idaman-01.png') }}" alt="Idaman Hakim Enterprise"></a>
                        </div>
                        <!--=== Main Menu ===-->
                        <div class="theme-nav-menu">
                            <!--=== Menu Top ===-->
                            <div class="theme-menu-top d-block d-xl-none">
                                <div class="site-branding">
                                    <a href="#" class="brand-logo"><img src="{{ asset('assets/logo/Logo_Idaman-01.png') }}" alt="Idaman Hakim Enterprise"></a>
                                </div>
                            </div>
                            <!--=== Main Menu ===-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item"><a href="#about">Mengenai Kami</a></li>
                                    <li class="menu-item"><a href="#services">Perkhidmatan</a></li>
                                    <li class="menu-item"><a href="#process">Cara Kami Bekerja</a></li>
                                    <li class="menu-item"><a href="#projects">Projek Kami</a></li>
                                    <li class="menu-item"><a href="#team">Galeri Kami</a></li>
                                </ul>
                            </nav>
                            <!--=== Nav Button ===-->
                            <div class="theme-nav-button mt-20 d-block d-md-none">
                                <a href="https://wa.me/60193127345" target="_blank" rel="noopener" class="theme-btn style-one">Hubungi Kami<i class="far fa-arrow-right"></i></a>
                            </div>
                            <!--===  Menu Bottom ===-->
                            <div class="theme-menu-bottom mt-50 d-block d-xl-none">
                                <h5>Ikuti Kami</h5>
                                <ul class="social-link">
                                    <li><a href="https://www.facebook.com/moriproduction/" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://wa.me/60193127345" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--=== Header Nav Right ===-->
                        <div class="nav-right-item">
                            <div class="nav-button d-none d-md-block">
                                <a href="https://wa.me/60193127345" target="_blank" rel="noopener" class="theme-btn style-one">Hubungi Kami<i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--=== End  Header Area  ===-->
        <!--======  Smooth Wrapper  ======-->
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <main>
                    <!--======  Start Hero Section  ======-->
                    <section class="bizzen-hero">
                        <div class="bizzen-hero_one bg_cover navy-texture-bg">
                            <div class="navy-texture-img"></div>
                            <div class="hero-bg-shape"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!--=== Hero Content ===-->
                                        <div class="hero-content">
                                            <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">Rakan Niaga Berdaftar Kementerian Kewangan (MOF)</span>
                                            <h1 class="text-anm">Idaman Hakim Enterprise: Pembekalan & Perkhidmatan Yang Dipercayai</h1>
                                            <div class="hero-button" data-aos="fade-up" data-aos-duration="1400">
                                                <a href="https://wa.me/60193127345" target="_blank" rel="noopener" class="theme-btn style-one">HUBUNGI KAMI<i class="far fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <!--=== Text Box ===-->
                                        <div class="text-box mb-5 mb-xl-0" data-aos="fade-up" data-aos-duration="1000">
                                            <h4>30 <span>Bidang Berdaftar MOF</span></h4>
                                            <p>Beroperasi di Sepang dan Putrajaya, pihak kami menyediakan perkhidmatan pembekalan kepada agensi kerajaan, syarikat swasta serta pelanggan korporat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--=== Hero Image ===-->
                                        <div class="hero-image text-center" data-aos="fade-up" data-aos-duration="1200">
                                            <img src="{{ asset('assets/images/gallery/langsir-krim-siap.jpeg') }}" alt="hasil kerja Idaman Hakim Enterprise">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End Hero Section  ======-->
                    <!--======  Start Service Section  ======-->
                    <section id="services" class="bizzen-service_one pt-115 pb-115 bg_cover" style="background-image: url({{ asset('assets/images/home-one/bg/service-bg.png') }});">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-8">
                                    <!--=== Section Title ===-->
                                    <div class="section-title text-center mb-60">
                                        <span class="sub-title" data-aos="fade-up" data-aos-duration="1000">30 BIDANG MOF</span>
                                        <h2 class="text-anm">Skop Pembekalan Dan Perkhidmatan</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="mof-card mb-30" style="height: auto;">
                                        <div class="mof-card-icon" style="background: var(--primary-black-color, #063232);"><i class="fas fa-box-open" style="color: var(--primary-color, #C2DF93);"></i></div>
                                        <h4 class="mof-group-title" style="color: var(--heading-color, #16191d);">Pembekalan & Perkhidmatan</h4>
                                        <p style="font-size:14px; margin-bottom:15px;">Merangkumi bekalan pejabat, peralatan dan kelengkapan, percetakan, pakaian seragam serta ICT dan komputer.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="mof-card mb-30" style="height: auto;">
                                        <div class="mof-card-icon" style="background: var(--primary-black-color, #063232);"><i class="fas fa-utensils" style="color: var(--primary-color, #C2DF93);"></i></div>
                                        <h4 class="mof-group-title" style="color: var(--heading-color, #16191d);">Makanan & Hospitaliti</h4>
                                        <p style="font-size:14px; margin-bottom:15px;">Merangkumi perkhidmatan katering, pengurusan majlis, keperluan dapur serta bekalan produk makanan.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1400">
                                    <div class="mof-card mb-30" style="height: auto;">
                                        <div class="mof-card-icon" style="background: var(--primary-black-color, #063232);"><i class="fas fa-tools" style="color: var(--primary-color, #C2DF93);"></i></div>
                                        <h4 class="mof-group-title" style="color: var(--heading-color, #16191d);">Perkhidmatan & Pengurusan</h4>
                                        <p style="font-size:14px; margin-bottom:15px;">Merangkumi pengurusan fasiliti, penyelenggaraan, perkhidmatan kebersihan, logistik serta pengangkutan.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1600">
                                    <div class="mof-card mb-30" style="height: auto;">
                                        <div class="mof-card-icon" style="background: var(--primary-black-color, #063232);"><i class="fas fa-layer-group" style="color: var(--primary-color, #C2DF93);"></i></div>
                                        <h4 class="mof-group-title" style="color: var(--heading-color, #16191d);">Lain-Lain</h4>
                                        <p style="font-size:14px; margin-bottom:15px;">Merangkumi perkhidmatan konsultasi, pemasaran dan promosi, perkhidmatan digital serta projek khas mengikut spesifikasi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=== Text Box ===-->
                                    <div class="text-box text-center mt-30" data-aos="fade-up" data-aos-duration="1800">
                                        <p>Pihak kami berdaftar dalam <a href="#about">30 bidang di bawah Kementerian Kewangan (MOF) - Lihat Selanjutnya <i class="far fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End Service Section  ======-->
                    <!--======  Start About Section  ======-->
                    <section id="about" class="bizzen-about_one pt-120 pb-120">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-10">
                                    <!--=== Bizzen Image ===-->
                                    <div class="bizzen-image mb-5 mb-xl-0" data-aos="fade-up" data-aos-duration="800">
                                        <img src="{{ asset('assets/images/gallery/kabinet-dapur.jpeg') }}" alt="hasil kerja pembekalan">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-10">
                                    <!--=== Bizzen Content Box ===-->
                                    <div class="bizzen-content-box">
                                        <div class="section-title mb-50">
                                            <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">Mengenai Kami</span>
                                            <h2 class="text-anm">Latar Belakang Dan Pengalaman Perniagaan Kami</h2>
                                        </div>
                                        <div class="experience-text-wrap">
                                            <div class="experience-box" data-aos="fade-up" data-aos-duration="1000">
                                                <h2>30 <span>bidang berdaftar MOF</span></h2>
                                            </div>
                                            <div class="text-box">
                                                <p data-aos="fade-up" data-aos-duration="1000">Idaman Hakim Enterprise merupakan sebuah entiti perniagaan yang beroperasi di kawasan Sepang dan Putrajaya, dengan komitmen menyediakan pelbagai perkhidmatan dan pembekalan bagi memenuhi keperluan agensi kerajaan, syarikat swasta, organisasi serta pelanggan korporat.</p>
                                                <ul class="check-list style-one" data-aos="fade-up" data-aos-duration="1200">
                                                    <li><i class="fas fa-check-circle"></i>Berdaftar dalam 30 Bidang MOF</li>
                                                    <li><i class="fas fa-check-circle"></i>Rakan niaga sehenti bagi agensi kerajaan & korporat</li>
                                                    <li><i class="fas fa-check-circle"></i>Beroperasi di Sepang & Putrajaya, Malaysia</li>
                                                </ul>
                                                <div class="bizzen-button" data-aos="fade-up" data-aos-duration="1400">
                                                    <a href="https://wa.me/60193127345" target="_blank" rel="noopener" class="theme-btn style-one">HUBUNGI KAMI<i class="far fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End About Section  ======-->
                    <!--======  Start Achievement Section  ======-->
                    <section class="bizzen-counter_one bg_cover navy-texture-bg pt-115 pb-80">
                        <div class="navy-texture-img"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!--=== Bizzen Content Box ===-->
                                    <div class="bizzen-content-box">
                                        <div class="section-title text-white">
                                            <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">Pencapaian</span>
                                            <h2 class="text-anm">Dipercayai Merentasi Sektor Kerajaan Dan Korporat</h2>
                                        </div>
                                        <p data-aos="fade-up" data-aos-duration="1200">Sebagai rakan niaga berdaftar MOF, pihak kami adalah komited untuk menyediakan perkhidmatan pembekalan yang cekap, amanah dan mematuhi spesifikasi yang ditetapkan oleh pelanggan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <!--=== Bizzen Counter Item ===-->
                                    <div class="bizzen-counter-item style-one mb-30" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="number">
                                            <h2><span class="counter">30</span></h2>
                                        </div>
                                        <div class="content">
                                            <h5>Bidang <br> Berdaftar MOF</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <!--=== Bizzen Counter Item ===-->
                                    <div class="bizzen-counter-item style-one mb-30" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="number">
                                            <h2><span class="counter">2</span></h2>
                                        </div>
                                        <div class="content">
                                            <h5>Lokasi <br> Operasi</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <!--=== Bizzen Counter Item ===-->
                                    <div class="bizzen-counter-item style-one mb-30" data-aos="fade-up" data-aos-duration="1400">
                                        <div class="number">
                                            <h2><span class="counter">100</span>%</h2>
                                        </div>
                                        <div class="content">
                                            <h5>Komited <br> Kepada Pelanggan</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End Achievement Section  ======-->
                    <!--======  Start Process Section  ======-->
                    <section id="process" class="bizzen-proces_one py-5 py-xl-0 my-xl-0">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-12">
                                    <!--=== Section Title ===-->
                                    <div class="section-title mb-5 mb-xl-0">
                                        <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">CARA KAMI BEKERJA</span>
                                        <h2 class="text-anm">Tiga Langkah Mudah Bagi Setiap Urusan</h2>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <!--=== Section Title ===-->
                                    <div class="bizzen-work-list">
                                        <div class="bizzen-process-item style-one" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="number">
                                                01
                                            </div>
                                            <div class="content">
                                                <h4>Pertanyaan awal melalui WhatsApp atau e-mel</h4>
                                            </div>
                                        </div>
                                        <div class="bizzen-process-item style-one" data-aos="fade-up" data-aos-duration="1200">
                                            <div class="number">
                                                02
                                            </div>
                                            <div class="content">
                                                <h4>Perbincangan keperluan dan penyediaan sebut harga</h4>
                                            </div>
                                        </div>
                                        <div class="bizzen-process-item style-one" data-aos="fade-up" data-aos-duration="1400">
                                            <div class="number">
                                                03
                                            </div>
                                            <div class="content">
                                                <h4>Pelaksanaan pembekalan dan perkhidmatan</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <!--=== Text Box ===-->
                                    <div class="text-box mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1600">
                                        <span>Rakan niaga sehenti bagi keperluan organisasi anda</span>
                                        <h2>30+</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End Process Section  ======-->
                    <!--====== Start Project Section ======-->
                    <section id="projects" class="bizzen-project-sec pt-120 pb-90">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-10">
                                    <!--=== Section Title ===-->
                                    <div class="section-title text-center mb-60">
                                        <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">Projek Kami</span>
                                        <h2 class="text-anm">Sebahagian Projek Yang Telah Dilaksanakan</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=== Bizzen Project List ===-->
                                    <div class="bizzen-project-list">
                                        <!--=== Bizzen Project Item ===-->
                                        <div class="bizzen-project-item style-one mb-30">
                                            <div class="project-inner bg_cover" style="background-image: url({{ asset('assets/images/gallery/penghantaran-tilam-upm.jpeg') }});">
                                                <div class="content">
                                                    <span class="sub-title">PEMBEKALAN</span>
                                                    <h4 class="title"><a href="https://wa.me/60193127345" target="_blank" rel="noopener">Penghantaran Tilam ke Universiti Putra Malaysia</a></h4>
                                                    <p>Pembekalan dan penghantaran tilam secara pukal ke kolej kediaman UPM telah dilaksanakan dengan cekap dan mematuhi tempoh masa yang ditetapkan.</p>
                                                    <div class="tag-button">
                                                        <a href="#" class="theme-btn style-two">Pembekalan</a>
                                                        <a href="#" class="theme-btn style-two">Institusi</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--=== Bizzen Project Item ===-->
                                        <div class="bizzen-project-item style-one mb-30">
                                            <div class="project-inner bg_cover" style="background-image: url({{ asset('assets/images/gallery/papan-tanda-pelita-cafe-siap.jpeg') }});">
                                                <div class="content">
                                                    <span class="sub-title">PAPAN TANDA</span>
                                                    <h4 class="title"><a href="https://wa.me/60193127345" target="_blank" rel="noopener">Fabrikasi & Pemasangan Papan Tanda Pelita Café</a></h4>
                                                    <p>Pihak kami mengendalikan keseluruhan proses projek papan tanda perniagaan pelanggan, bermula daripada peringkat fabrikasi sehingga pemasangan disempurnakan.</p>
                                                    <div class="tag-button">
                                                        <a href="#" class="theme-btn style-two">Fabrikasi</a>
                                                        <a href="#" class="theme-btn style-two">Pemasangan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--=== Bizzen Project Item ===-->
                                        <div class="bizzen-project-item style-one mb-30">
                                            <div class="project-inner bg_cover" style="background-image: url({{ asset('assets/images/gallery/susunan-meja-kerusi-majlis-1.jpeg') }});">
                                                <div class="content">
                                                    <span class="sub-title">MAJLIS & ACARA</span>
                                                    <h4 class="title"><a href="https://wa.me/60193127345" target="_blank" rel="noopener">Persediaan Meja & Kerusi Majlis Korporat</a></h4>
                                                    <p>Penyediaan lengkap meja, kerusi dan dekorasi bagi majlis serta acara rasmi anjuran pelanggan korporat.</p>
                                                    <div class="tag-button">
                                                        <a href="#" class="theme-btn style-two">Katering</a>
                                                        <a href="#" class="theme-btn style-two">Pengurusan Acara</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--====== End Project Section ======-->
                    <!--====== Start Gallery Section ======-->
                    <section id="team" class="bizzen-team_one pt-115 pb-120 p-r z-1">
                        <div class="team-bg bg_cover navy-texture-bg"><div class="navy-texture-img"></div></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-10">
                                    <!--=== Section Title ===-->
                                    <div class="section-title text-center text-white mb-60">
                                        <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">Galeri Kami</span>
                                        <h2 class="text-anm">Sebahagian Hasil Kerja Yang Telah Dilaksanakan</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="work-gallery" id="workGallery" data-aos="fade-up" data-aos-duration="1000"></div>
                            <template id="workGalleryData">
                                @php
                                    $galleryAspectRatios = ['1/1', '3/4', '4/3', '1/1', '3/4'];
                                    $galleryImages = [
                                        'langsir-krim-siap.jpeg' => 'Langsir siap dipasang',
                                        'langsir-teal-siap.jpeg' => 'Langsir siap dipasang',
                                        'langsir-kuning-siap.jpeg' => 'Langsir siap dipasang',
                                        'langsir-bilik-kondominium.jpeg' => 'Langsir bilik kondominium',
                                        'langsir-bilik-mesyuarat-kuning-1.jpeg' => 'Langsir bilik mesyuarat',
                                        'langsir-bilik-mesyuarat-kuning-2.jpeg' => 'Langsir bilik mesyuarat',
                                        'langsir-pemasangan-oren.jpeg' => 'Pemasangan langsir',
                                        'langsir-putih-pemasangan.jpeg' => 'Pemasangan langsir',
                                        'langsir-ungu-pemasangan-1.jpeg' => 'Pemasangan langsir',
                                        'langsir-ungu-pemasangan-2.jpeg' => 'Pemasangan langsir',
                                        'kabinet-dapur.jpeg' => 'Kabinet dapur',
                                        'kain-skirting-meja-majlis.jpeg' => 'Skirting meja majlis',
                                        'persediaan-meja-majlis.jpeg' => 'Persediaan meja majlis',
                                        'susunan-meja-kerusi-majlis-1.jpeg' => 'Susunan meja & kerusi majlis',
                                        'susunan-meja-kerusi-majlis-2.jpeg' => 'Susunan meja & kerusi majlis',
                                        'set-pinggan-mangkuk-katering.jpeg' => 'Set pinggan mangkuk katering',
                                        'pembekalan-kotak-produk-1.jpeg' => 'Pembekalan produk',
                                        'pembekalan-kotak-saunaku.jpeg' => 'Pembekalan produk',
                                        'pembekalan-minyak-herba.jpeg' => 'Pembekalan produk herba',
                                        'pembekalan-produk-campuran.jpeg' => 'Pembekalan produk',
                                        'pembekalan-produk-herba.jpeg' => 'Pembekalan produk herba',
                                        'pembekalan-air-botol-kerusi-lipat.jpeg' => 'Pembekalan air & kerusi lipat',
                                        'penghantaran-tilam-upm.jpeg' => 'Penghantaran tilam ke UPM',
                                        'penghantaran-tilam-lori-1.jpeg' => 'Penghantaran tilam',
                                        'penghantaran-tilam-lori-2.jpeg' => 'Penghantaran tilam',
                                        'penghantaran-tilam-pejabat.jpeg' => 'Penghantaran tilam',
                                        'penghantaran-tilam-tangga.jpeg' => 'Penghantaran tilam',
                                        'papan-tanda-pelita-cafe-fabrikasi.jpeg' => 'Fabrikasi papan tanda',
                                        'papan-tanda-pelita-cafe-siap.jpeg' => 'Papan tanda siap dipasang',
                                        'papan-tanda-pemasangan.jpeg' => 'Pemasangan papan tanda',
                                        'lori-tangga-gondola.jpeg' => 'Lori tangga gondola',
                                        'pembaikan-bumbung.jpeg' => 'Pembaikan bumbung',
                                        'pengecatan-siling-1.jpeg' => 'Pengecatan siling',
                                        'pengecatan-siling-2.jpeg' => 'Pengecatan siling',
                                        'pemasangan-jubin.jpeg' => 'Pemasangan jubin',
                                        'kerja-paip-renovasi.jpeg' => 'Kerja paip renovasi',
                                        'siling-kayu-beranda.jpeg' => 'Siling kayu beranda',
                                        'beranda-siling-kayu-kipas.jpeg' => 'Siling kayu beranda',
                                    ];
                                @endphp
                                @foreach ($galleryImages as $file => $caption)
                                    <div class="gallery-col-item" data-more="{{ $loop->index >= 12 ? '1' : '0' }}">
                                        <a href="{{ asset('assets/images/gallery/' . $file) }}" class="gallery-item" data-caption="{{ $caption }}" style="aspect-ratio: {{ $galleryAspectRatios[$loop->index % count($galleryAspectRatios)] }};">
                                            <img src="{{ asset('assets/images/gallery/' . $file) }}" alt="{{ $caption }}" loading="lazy">
                                            <span class="gallery-overlay"><i class="fas fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                @endforeach
                            </template>
                            @if (count($galleryImages) > 12)
                                <div class="row justify-content-center gallery-toggle-wrap">
                                    <div class="col-auto">
                                        <button type="button" id="galleryToggleBtn" class="theme-btn style-one">Lihat Lebih Banyak<i class="far fa-arrow-down"></i></button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section><!--====== End Gallery Section ======-->
                    <!--====== Start Contact Section ======-->
                    <section id="contact" class="bizzen-contact_one">
                        <!-- Contact Wrapper -->
                        <div class="contact-wrapper">
                            <!--=== Bizzen Bg ===-->
                            <div class="contact-bg-wrap">
                                <div class="contact-bg bg_cover" style="background-image: url({{ asset('assets/images/gallery/langsir-bilik-mesyuarat-kuning-1.jpeg') }});"></div>
                            </div>
                            <!--=== Bizzen Contact Wrapper ===-->
                            <div class="contact-form-wrapper mb-120">
                                <!--=== Bizzen Content Box ===-->
                                <div class="bizzen-content-box">
                                    <div class="section-title text-white">
                                        <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">Hubungi Kami</span>
                                        <h2 class="text-anm">Dapatkan Sebut Harga Percuma</h2>
                                    </div>
                                    <p class="mb-50" data-aos="fade-up" data-aos-duration="1200">Sebarang pertanyaan mengenai projek atau perkhidmatan kami boleh dikemukakan melalui WhatsApp atau e-mel. Pihak kami akan memberikan maklum balas dalam tempoh masa yang munasabah.</p>
                                    <div class="row" data-aos="fade-up" data-aos-duration="1400">
                                        <div class="col-lg-6 mb-30">
                                            <a href="https://wa.me/60193127345" target="_blank" rel="noopener" class="theme-btn style-one d-flex align-items-center justify-content-center gap-2 text-center" style="white-space: nowrap;"><i class="fab fa-whatsapp"></i> WHATSAPP: 019-312 7345</a>
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <a href="mailto:idamanhakim.my@gmail.com" class="theme-btn style-one d-flex align-items-center justify-content-center gap-2 text-center" style="white-space: nowrap;"><i class="far fa-envelope"></i> idamanhakim.my@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--====== End Contact Section ======-->
                    <!--====== Start Company Section ======-->
                    <section class="bizzen-company-sec pt-120 pb-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-box text-center mb-30" data-aos="fade-up" data-aos-duration="1000">
                                        <h6>Dipercayai oleh agensi kerajaan, institusi pendidikan serta syarikat korporat</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            @php
                                $trustedEntities = [
                                    'institut-sosial-malaysia.png' => 'Institut Sosial Malaysia',
                                    'kemas-selangor.png' => 'KEMAS Selangor',
                                    'perhilitan.png' => 'PERHILITAN',
                                    'jkr.png' => 'JKR',
                                    'veterinar-sepang.png' => 'Jabatan Veterinar Sepang',
                                    'pejabat-tanah-sepang.png' => 'Pejabat Tanah Daerah Sepang',
                                    'hospital-serdang.png' => 'Hospital Serdang',
                                ];
                            @endphp
                            <div class="entity-logo-marquee" data-aos="fade-up" data-aos-duration="1200">
                                <div class="entity-logo-track">
                                    @for ($i = 0; $i < 2; $i++)
                                        @foreach ($trustedEntities as $file => $name)
                                            <div class="entity-logo-box"><img src="{{ asset('assets/logo/' . $file) }}" alt="{{ $name }}" loading="lazy"></div>
                                        @endforeach
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </section><!--====== End Company Section ======-->
                </main>
                <!--======  Start Footer  ======-->
                <footer class="main-footer gov-footer">
                    <div class="footer-widget-wrapper">
                        <div class="container">
                            <div class="row gy-4">
                                <div class="col-lg-4">
                                    <div class="footer-widget footer-about-widget">
                                        <div class="widget-content">
                                            <div class="footer-logo mb-20">
                                                <a href="#"><img src="{{ asset('assets/logo/Logo_Idaman-01.png') }}" alt="Idaman Hakim Enterprise"></a>
                                            </div>
                                            <p class="mb-0">Idaman Hakim Enterprise merupakan sebuah entiti perniagaan yang berdaftar dalam 30 bidang di bawah Kementerian Kewangan (MOF), beroperasi di Sepang dan Putrajaya, Malaysia.</p>
                                            <p class="mb-0 mt-2">No. Pendaftaran Perniagaan: 002846778-U / 201803217854</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="footer-widget footer-nav-widget">
                                        <h4 class="widget-title">Pautan Pantas</h4>
                                        <ul class="gov-footer-list">
                                            <li><a href="#about">Mengenai Kami</a></li>
                                            <li><a href="#services">Perkhidmatan</a></li>
                                            <li><a href="#process">Cara Kami Bekerja</a></li>
                                            <li><a href="#projects">Projek Kami</a></li>
                                            <li><a href="#team">Galeri Kami</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="footer-widget footer-contact-info-widget">
                                        <h4 class="widget-title">Maklumat Perhubungan</h4>
                                        <ul class="gov-footer-list">
                                            <li>1A, Jalan Diplomatik 2, Presint 15, 62050 Putrajaya</li>
                                            <li><a href="https://wa.me/60193127345" target="_blank" rel="noopener">019-312 7345</a></li>
                                            <li><a href="mailto:idamanhakim.my@gmail.com">idamanhakim.my@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4">
                                    <div class="footer-widget footer-social-widget">
                                        <h4 class="widget-title">Ikuti Kami</h4>
                                        <ul class="gov-footer-list">
                                            <li><a href="https://www.facebook.com/moriproduction/" target="_blank" rel="noopener">Facebook</a></li>
                                            <li><a href="https://wa.me/60193127345" target="_blank" rel="noopener">WhatsApp</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Copyright Area ===-->
                    <div class="copyright-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="copyright-text text-md-start text-center">
                                        <p>&copy; {{ date('Y') }} Idaman Hakim Enterprise. Hak Cipta Terpelihara.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="copyright-link text-md-end text-center">
                                        <a href="#about">Mengenai Kami</a>
                                        <a href="#contact">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!--====== Jquery js ======-->
        <script src="{{ asset('assets/js/plugins/jquery-3.7.1.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
        <!--====== Gsap Js ======-->
        <script src="{{ asset('assets/js/plugins/gsap/gsap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/gsap/SplitText.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/gsap/ScrollSmoother.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/gsap/ScrollTrigger.min.js') }}"></script>
        <!--====== Slick js ======-->
        <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
        <!--====== Magnific js ======-->
        <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
        <!--====== Waypoint js ======-->
        <script src="{{ asset('assets/js/plugins/jquery.waypoints.js') }}"></script>
        <!--====== CounterUp js ======-->
        <script src="{{ asset('assets/js/plugins/jquery.counterup.min.js') }}"></script>
        <!--====== Aos js ======-->
        <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
        <!--====== Common js ======-->
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        <!--====== Anchor Scroll Fix (ScrollSmoother compatibility) ======-->
        <script>
            document.addEventListener('click', function (e) {
                var link = e.target.closest('a[href^="#"]');
                if (!link) return;
                var id = link.getAttribute('href');
                if (id.length < 2) return;
                var target = document.querySelector(id);
                if (!target) return;
                e.preventDefault();
                var smoother = window.ScrollSmoother && ScrollSmoother.get();
                if (smoother) {
                    smoother.scrollTo(target, true, 'top top');
                } else {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
                history.pushState(null, '', id);
            });
        </script>
        <!--====== Work Gallery Masonry + Lightbox ======-->
        <script>
            jQuery(function ($) {
                var $gallery = $('#workGallery');
                var $template = $('#workGalleryData');
                var showingMore = false;

                function columnCount() {
                    var w = window.innerWidth;
                    if (w < 576) return 2;
                    if (w < 992) return 3;
                    return 4;
                }

                function renderMasonry() {
                    if (!$gallery.length || !$template.length) return;
                    var $items = $template.contents().filter(function () {
                        return this.nodeType === 1 && $(this).hasClass('gallery-col-item');
                    });
                    if (!showingMore) {
                        $items = $items.filter(function () {
                            return $(this).attr('data-more') !== '1';
                        });
                    }

                    var cols = columnCount();
                    var $colEls = [];
                    $gallery.empty();
                    for (var c = 0; c < cols; c++) {
                        var $col = $('<div class="gallery-col"></div>');
                        $gallery.append($col);
                        $colEls.push({ el: $col, height: 0 });
                    }

                    $items.each(function () {
                        var $clone = $(this).clone();
                        var ratio = 1;
                        var m = /aspect-ratio:\s*([\d.]+)\s*\/\s*([\d.]+)/.exec($clone.find('.gallery-item').attr('style') || '');
                        if (m) { ratio = parseFloat(m[2]) / parseFloat(m[1]); }
                        var shortest = $colEls.reduce(function (a, b) { return b.height < a.height ? b : a; });
                        shortest.el.append($clone);
                        shortest.height += ratio;
                    });

                    if ($.fn.magnificPopup) {
                        $gallery.magnificPopup({
                            delegate: 'a.gallery-item',
                            type: 'image',
                            gallery: { enabled: true },
                            image: {
                                titleSrc: function (item) {
                                    return item.el.attr('data-caption');
                                }
                            },
                            mainClass: 'mfp-fade'
                        });
                    }
                }

                renderMasonry();

                var resizeTimer;
                $(window).on('resize', function () {
                    clearTimeout(resizeTimer);
                    resizeTimer = setTimeout(renderMasonry, 200);
                });

                $('#galleryToggleBtn').on('click', function () {
                    showingMore = true;
                    renderMasonry();
                    $(this).parent().parent().fadeOut(200);
                });
            });
        </script>
    </body>
</html>
