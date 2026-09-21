<!DOCTYPE html>
<html lang="ms">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Idaman Hakim Enterprise - Rakan Niaga & Pembekalan Yang Dipercayai di Sepang & Putrajaya, Malaysia. Berdaftar dalam 30 Bidang MOF.">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>{{ config('app.name', 'Idaman Hakim Enterprise') }}</title>
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
            .brand-logo img { height: 60px; width: auto; }
            .footer-logo img { height: 60px; width: auto; }
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
        </style>
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loading-wrapper">
                <div class="loading"></div>
                <div id="loading-icon"><img src="{{ asset('assets/images/loader.png') }}" alt="loader"></div>
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
                                    <li class="menu-item"><a href="#team">Pasukan Kami</a></li>
                                    <li class="menu-item"><a href="#contact">Hubungi Kami</a></li>
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
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
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
                        <div class="bizzen-hero_one bg_cover" style="background-image: url({{ asset('assets/images/home-one/hero/hero-bg.jpg') }});">
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
                    <section class="bizzen-counter_one bg_cover pt-115 pb-80" style="background-color: var(--primary-black-color, #063232);">
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
                    <!--====== Start Team Section ======-->
                    <section id="team" class="bizzen-team_one pt-115 p-r z-1">
                        <div class="team-bg bg_cover" style="background-image: url({{ asset('assets/images/home-one/bg/team-bg.jpg') }});"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-10">
                                    <!--=== Section Title ===-->
                                    <div class="section-title text-center text-white mb-60">
                                        <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">Pasukan Kami</span>
                                        <h2 class="text-anm">Pasukan Berpengalaman Bagi Setiap Pelaksanaan Projek</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 col-sm-12">
                                    <!--=== Bizzen Team Item ===-->
                                    <div class="bizzen-team-item style-one mb-40" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="member-image">
                                            <img src="{{ asset('assets/images/gallery/lori-tangga-gondola.jpeg') }}" alt="pasukan operasi">
                                            <div class="hover-content">
                                                <div class="content-wrap">
                                                    <div class="member-info text-center">
                                                        <h4 class="title">Pasukan Operasi</h4>
                                                        <span class="position">Pemasangan & Penghantaran</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-12">
                                    <!--=== Bizzen Team Item ===-->
                                    <div class="bizzen-team-item style-one mb-40" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="member-image">
                                            <img src="{{ asset('assets/images/gallery/susunan-meja-kerusi-majlis-2.jpeg') }}" alt="pasukan acara">
                                            <div class="hover-content">
                                                <div class="content-wrap">
                                                    <div class="member-info text-center">
                                                        <h4 class="title">Pasukan Acara</h4>
                                                        <span class="position">Katering & Pengurusan Majlis</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-12">
                                    <!--=== Bizzen Team Item ===-->
                                    <div class="bizzen-team-item style-one mb-40" data-aos="fade-up" data-aos-duration="1400">
                                        <div class="member-image">
                                            <img src="{{ asset('assets/images/gallery/pengecatan-siling-1.jpeg') }}" alt="pasukan renovasi">
                                            <div class="hover-content">
                                                <div class="content-wrap">
                                                    <div class="member-info text-center">
                                                        <h4 class="title">Pasukan Renovasi</h4>
                                                        <span class="position">Penyelenggaraan & Pembaikan</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-12">
                                    <!--=== Bizzen Team Item ===-->
                                    <div class="bizzen-team-item style-one mb-40" data-aos="fade-up" data-aos-duration="1600">
                                        <div class="member-image">
                                            <img src="{{ asset('assets/images/gallery/pembekalan-kotak-saunaku.jpeg') }}" alt="pasukan pembekalan">
                                            <div class="hover-content">
                                                <div class="content-wrap">
                                                    <div class="member-info text-center">
                                                        <h4 class="title">Pasukan Pembekalan</h4>
                                                        <span class="position">Produk & Logistik</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--====== End Team Section ======-->
                    <!--====== Start Testimonial Section ======-->
                    <section class="bizzen-testimonial_one pt-80 pb-110">
                        <div class="testimonial-map-bg bg_cover" style="background-image: url({{ asset('assets/images/home-one/testimonial/map-bg.png') }});"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=== Quote Box ===-->
                                    <div class="quote-box text-center mb-40">
                                        <img src="{{ asset('assets/images/home-one/testimonial/quote.png') }}" alt="quote">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <!--=== Testimonial Slider ===-->
                                    <div class="testimonial-slider">
                                        <!--=== Bizzen Testimonial Item ===-->
                                        <div class="bizzen-testimonial-item style-one">
                                            <div class="testimonial-content">
                                                <p>"Pembekalan tilam bagi kolej kediaman kami telah diuruskan dengan cekap dan tepat pada masa oleh Idaman Hakim Enterprise. Keseluruhan proses daripada pesanan sehingga penghantaran berjalan lancar." </p>
                                                <div class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="author-thumb-item">
                                                    <div class="author-thumb">
                                                        <img src="{{ asset('assets/images/gallery/penghantaran-tilam-upm.jpeg') }}" alt="testimoni pelanggan">
                                                    </div>
                                                    <div class="author-info">
                                                        <h5>Pelanggan Institusi</h5>
                                                        <span class="position">Kolej Kediaman, UPM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--=== Bizzen Testimonial Item ===-->
                                        <div class="bizzen-testimonial-item style-one">
                                            <div class="testimonial-content">
                                                <p>"Papan tanda kafe kami telah siap difabrikasi dan dipasang dengan kualiti yang kemas. Perkhidmatan yang diberikan adalah profesional sepanjang tempoh pelaksanaan projek." </p>
                                                <div class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="author-thumb-item">
                                                    <div class="author-thumb">
                                                        <img src="{{ asset('assets/images/gallery/papan-tanda-pelita-cafe-siap.jpeg') }}" alt="testimoni pelanggan">
                                                    </div>
                                                    <div class="author-info">
                                                        <h5>Pemilik Perniagaan</h5>
                                                        <span class="position">Pelita Café</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--====== End Testimonial Section ======-->
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
                                            <a href="https://wa.me/60193127345" target="_blank" rel="noopener" class="theme-btn style-one d-block text-center"><i class="fab fa-whatsapp"></i> WHATSAPP: 019-312 7345</a>
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <a href="mailto:idamanhakim.my@gmail.com" class="theme-btn style-one d-block text-center"><i class="far fa-envelope"></i> IDAMANHAKIM.MY@GMAIL.COM</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--====== End Contact Section ======-->
                    <!--====== Start Blog Section ======-->
                    <section class="bizzen-blog-sec pt-110 pb-90">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-10">
                                    <!--=== Bizzen Content Box ===-->
                                    <div class="bizzen-content-box mb-5 mb-xl-0 text-center text-xl-start">
                                        <div class="section-title">
                                            <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">AKTIVITI KAMI</span>
                                            <h2 class="text-anm">Aktiviti Terkini Pihak Kami</h2>
                                        </div>
                                        <div class="bizzen-button" data-aos="fade-up" data-aos-duration="1000">
                                            <a href="https://wa.me/60193127345" target="_blank" rel="noopener" class="theme-btn style-one">HUBUNGI KAMI<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-10">
                                    <!--=== Bizzen Blog List ===-->
                                    <div class="bizzen-blog-list">
                                        <!--=== Bizzen Blog Item ===-->
                                        <div class="bizzen-blog-post-item style-one mb-30" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('assets/images/gallery/pemasangan-jubin.jpeg') }}" alt="pemasangan jubin">
                                            </div>
                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <span><a href="#">Renovasi</a></span>
                                                </div>
                                                <h4 class="title">Pemasangan Jubin Beranda Rumah</h4>
                                                <p>Kerja pemasangan jubin lantai beranda telah dilaksanakan dengan kemas dan mengikut piawaian kerja yang ditetapkan.</p>
                                            </div>
                                        </div>
                                        <!--=== Bizzen Blog Item ===-->
                                        <div class="bizzen-blog-post-item style-one mb-30" data-aos="fade-up" data-aos-duration="1200">
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('assets/images/gallery/pembaikan-bumbung.jpeg') }}" alt="pembaikan bumbung">
                                            </div>
                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <span><a href="#">Penyelenggaraan</a></span>
                                                </div>
                                                <h4 class="title">Pembaikan & Penyelenggaraan Bumbung</h4>
                                                <p>Perkhidmatan pembaikan bumbung dilaksanakan menggunakan lori gondola bagi memastikan keselamatan semasa kerja ketinggian.</p>
                                            </div>
                                        </div>
                                        <!--=== Bizzen Blog Item ===-->
                                        <div class="bizzen-blog-post-item style-one mb-30" data-aos="fade-up" data-aos-duration="1400">
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('assets/images/gallery/langsir-ungu-pemasangan-1.jpeg') }}" alt="pemasangan langsir">
                                            </div>
                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <span><a href="#">Pembekalan</a></span>
                                                </div>
                                                <h4 class="title">Pemasangan Langsir Kediaman & Pejabat</h4>
                                                <p>Pembekalan dan pemasangan langsir dilaksanakan mengikut spesifikasi yang dikehendaki oleh pelanggan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--====== End Blog Section ======-->
                    <!--====== Start Company Section ======-->
                    <section class="bizzen-company-sec pb-120">
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
                            <div class="row g-3" data-aos="fade-up" data-aos-duration="1200">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src="{{ asset('assets/images/gallery/penghantaran-tilam-upm.jpeg') }}" alt="UPM" class="w-100 rounded" style="aspect-ratio: 1/1; object-fit: cover;">
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src="{{ asset('assets/images/gallery/papan-tanda-pelita-cafe-siap.jpeg') }}" alt="Pelita Café" class="w-100 rounded" style="aspect-ratio: 1/1; object-fit: cover;">
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src="{{ asset('assets/images/gallery/susunan-meja-kerusi-majlis-2.jpeg') }}" alt="majlis korporat" class="w-100 rounded" style="aspect-ratio: 1/1; object-fit: cover;">
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src="{{ asset('assets/images/gallery/langsir-bilik-mesyuarat-kuning-1.jpeg') }}" alt="langsir pejabat" class="w-100 rounded" style="aspect-ratio: 1/1; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </section><!--====== End Company Section ======-->
                </main>
                <!--======  Start Footer  ======-->
                <footer class="main-footer">
                    <div class="footer-shape"><img src="{{ asset('assets/images/footer/footer-shape.png') }}" alt="footer shape"></div>
                    <!--=== Footer Widget Wrapper ===-->
                    <div class="footer-widget-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <!--=== Footer Widget ===-->
                                    <div class="footer-widget footer-about-widget pt-100" data-aos="fade-up" data-aos-duration="800">
                                        <div class="widget-content">
                                            <div class="footer-logo mb-20">
                                                <a href="#"><img src="{{ asset('assets/logo/Logo_Idaman-01.png') }}" alt="Idaman Hakim Enterprise"></a>
                                            </div>
                                            <p class="mb-20">Idaman Hakim Enterprise - Rakan Niaga & Pembekalan Yang Dipercayai. Berdaftar dalam 30 bidang MOF.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <!--=== Footer Widget Wrap ===-->
                                    <div class="footer-widget-inner">
                                        <!--=== Footer Top ===-->
                                        <div class="footer-top" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="big-text">Berminat Untuk Berurusan Niaga?</div>
                                        </div>
                                        <div class="footer-widget-area">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--=== Footer Widget ===-->
                                                    <div class="footer-widget footer-contact-info-widget mb-40" data-aos="fade-up" data-aos-duration="1200">
                                                        <div class="widget-content">
                                                            <h6>Lokasi Operasi</h6>
                                                            <ul>
                                                                <li>
                                                                    Sepang & Putrajaya, Malaysia
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <!--=== Footer Widget ===-->
                                                    <div class="footer-widget footer-contact-info-widget mb-40" data-aos="fade-up" data-aos-duration="1400">
                                                        <div class="widget-content">
                                                            <h6>Perhubungan</h6>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://wa.me/60193127345" target="_blank" rel="noopener">019-312 7345</a>
                                                                </li>
                                                                <li>
                                                                    <a href="mailto:idamanhakim.my@gmail.com">idamanhakim.my@gmail.com</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <!--=== Footer Widget ===-->
                                                    <div class="footer-widget footer-social-widget mb-40" data-aos="fade-up" data-aos-duration="1600">
                                                        <h4 class="widget-title">Ikuti Kami:</h4>
                                                        <div class="widget-content">
                                                            <div class="social-box">
                                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                                <a href="https://wa.me/60193127345" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                    <!--=== Copyright Text ===-->
                                    <div class="copyright-text text-md-start text-center">
                                        <p>&copy; {{ date('Y') }} Idaman Hakim Enterprise. Hak Cipta Terpelihara.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--=== Copyright link ===-->
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
    </body>
</html>
