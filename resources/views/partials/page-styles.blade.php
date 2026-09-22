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
