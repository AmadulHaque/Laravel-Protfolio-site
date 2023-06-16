<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{$setting->title}}</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{(!empty($setting->favicon)) ? url('images/setting/'.$setting->favicon):url('images/profile/no_image.jpeg') }}">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
  
  <!-- Plugin css -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- Dark css here -->
  <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">

  <!-- Rtl css here -->
  <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">

  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.documentElement.classList.add("dark");
    } 
    if (localStorage.getItem("theme-color") === "light") {
      document.documentElement.classList.remove("dark");
    } 
  </script>

</head>

<body class="bg-dark_primary_bg">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->

    <button class="light__dark--btn style__fixed" id="light__to--dark">
        <svg class="dark--mode__icon" fill="currentColor" viewBox="0 0 512 512"><title>Moon</title><path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z"></path></svg>
        <svg class="light--mode__icon" fill="currentColor" viewBox="0 0 512 512"><title>Sunny</title><path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z"></path></svg>
    </button>
    
    <!-- Start header area -->
    <header class="header__section  header__transparent">
        <div class="header__sticky">
            <div class="container">
                <div class="main__header d-flex justify-content-between align-items-center">
                    <div class="main__logo">
                        <h1 class="main__logo--title">
                            <a class="main__logo--link" href="/">
                                <img class="main__logo--img logo_light" style="width: 200px;" src="{{(!empty($setting->logo)) ? url('images/setting/'.$setting->logo):url('images/profile/no_image.jpeg') }}" alt="logo-img">
                                <img class="main__logo--img logo_dark"  style="width: 200px;" src="{{(!empty($setting->logo)) ? url('images/setting/'.$setting->logo):url('images/profile/no_image.jpeg') }}" alt="logo-img">
                            </a>
                        </h1>
                    </div>
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg  class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                            <span class="visually-hidden">Offcanvas Menu Open</span>
                        </a>
                    </div>
                    <div class="main__header--right d-flex align-items-center d-none d-lg-block">
                        <div class="header__menu menu_border--none">
                            <nav class="header__menu--navigation">
                                <ul class="header__menu--wrapper d-flex">
                                    <li class="header__menu--items">
                                        <a class="header__menu--link" href="#home">Home 
                                        </a>
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link" href="#about">About </a>  
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link" href="#servives">Service  </a>  
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link" href="#portfolio">Portfolio </a>  
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link" href="#blog">Blog 
                                        </a>
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link" href="#contact">Contact </a>  
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <button class="primary__btn download__btn">
                            <svg class="download__btn--svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            Download CV
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->

    <!-- Start Offcanvas header menu -->
    <div class="offcanvas__header">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link" href="/">
                    <img src="{{(!empty($setting->logo)) ? url('images/setting/'.$setting->logo):url('images/profile/no_image.jpeg') }}" alt="Logo-img" width="158" height="36">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>close</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#home">Home</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#about">About</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#servives">Services</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#blog">Blog</a>
                    </li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#contact">Contact</a></li>
                </ul>
                <div class="offcanvas__download--btn">
                    <button class="primary__btn download__btn">
                        <svg class="download__btn--svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        Download CV
                    </button>
                 </div>
            </nav>
        </div>
    </div>
    <!-- End Offcanvas header menu -->

    <main class="main__content_wrapper">
        <!-- Start Hero section -->
        <div class="hero__section hero__section--bg" id="home">
            @include('frontend.pages.hero')
        </div>
        <!-- End Hero section -->

        <!-- Start sevices section -->
        <section class="services__section section--padding" id="servives">
            @include('frontend.pages.services')
        </section>
        <!-- End sevices section -->

        <!-- Start about section -->  <!-- Start skills Section -->
        @include('frontend.pages.about')
        
        <!-- End skills Section --> <!-- End about section -->  

        <!-- Start portfolio section -->
        <section class="portfolio__section portfolio__section--bg section--padding" id="portfolio">
            <div class="container">
                <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                    <div class="section__heading max-width-580">
                        <span class="section__heading--subtitle text__secondary">PORTFOLIO</span>
                        <h2 class="section__heading--title">Never compromise for 
                            portfolio quality</h2> 
                    </div>
                    <div class="section__heading--right max-width-450">
                        <p class="section__heading--desc">Promote your blog posts, case udie, and product ouncems
                            with the the branded videoscustomers coming back for
                            services Makes best effort.</p>
                    </div>
                </div>
                <div class="portfolio__section--inner">
                    <div class="button-group filters-button-group mb-50">
                        <button class="filters__button--items button is-checked" data-filter="*">Show All</button>
                        <button class="filters__button--items button" data-filter=".web">Web</button>
                        <button class="filters__button--items button" data-filter=".graphics">Graphics</button>
                        <button class="filters__button--items button" data-filter=".development">Development</button>
                        <button class="filters__button--items button" data-filter=".mobile">Mobile</button>
                    </div>
                    <div class="portfolio__grid mb--n30">
                        <div class="element-item web" data-category="web">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio1.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item graphics" data-category="graphics">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio2.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item development" data-category="development">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio3.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item mobile" data-category="mobile">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio4.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item web" data-category="web">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio5.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item graphics" data-category="graphics">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio6.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item development" data-category="development">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio7.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item web" data-category="web">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio8.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item mobile" data-category="mobile">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio9.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End portfolio section -->
        
        <!-- Start testimonial section -->
        <section class="testimonial__section section--padding position__relative">
            <div class="container">
                <div class="section__heading text-center mb-50">
                    <span class="section__heading--subtitle text__secondary">TESTIMONIALS</span>
                    <h2 class="section__heading--title">We are people say me</h2> 
                </div>
                <div class="testimonial__inner testimonial__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__items text-center">
                                <div class="testimonial__content mb-30">
                                    <ul class="rating__wrapper d-flex justify-content-center">
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                    </ul>   
                                     <p class="testimonial__desc">“We understand the importance of approaching each work integrally and believe in the power of simple and we
                                        say easy cation growth.</p>
                                </div>
                                <div class="testimonial__author">
                                    <img class="testimonial__author--media" src="assets/img/other/testimonial-author-thumb.png" alt="img">
                                    <h3 class="testimonial__author--title">Romes Barson</h3>
                                    <span class="testimonial__author--subtitle">Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__items text-center">
                                <div class="testimonial__content mb-30">
                                    <ul class="rating__wrapper d-flex justify-content-center">
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                    </ul>   
                                     <p class="testimonial__desc">“We understand the importance of approaching each work integrally and believe in the power of simple and we
                                        say easy cation growth.</p>
                                </div>
                                <div class="testimonial__author">
                                    <img class="testimonial__author--media" src="assets/img/other/testimonial-author-thumb.png" alt="img">
                                    <h3 class="testimonial__author--title">Romes Barson</h3>
                                    <span class="testimonial__author--subtitle">Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__items text-center">
                                <div class="testimonial__content mb-30">
                                    <ul class="rating__wrapper d-flex justify-content-center">
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                        <li class="rating__list"><span class="rating__icon"><svg width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></li>
                                    </ul>   
                                     <p class="testimonial__desc">“We understand the importance of approaching each work integrally and believe in the power of simple and we
                                        say easy cation growth.</p>
                                </div>
                                <div class="testimonial__author">
                                    <img class="testimonial__author--media" src="assets/img/other/testimonial-author-thumb.png" alt="img">
                                    <h3 class="testimonial__author--title">Romes Barson</h3>
                                    <span class="testimonial__author--subtitle">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__pagination swiper-pagination"></div>
                </div>
            </div>
            <span class="testimonial__position--icon left">
                <svg width="260" height="260" fill="currentColor" stroke="currentColor" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"></path></svg>
            </span>
            <span class="testimonial__position--icon right">
                <svg width="260" height="260" fill="currentColor" stroke="currentColor" viewBox="0 0 448 512"><path d="M448 296c0 66.3-53.7 120-120 120h-8c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H320c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72zm-256 0c0 66.3-53.7 120-120 120H64c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72z"></path></svg>
            </span>
        </section>
        <!-- End testimonial section -->

        <!-- Start contact section -->
        <section class="contact__section contact__section--bg" id="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact__left">
                            <div class="section__heading mb-50">
                                <span class="section__heading--subtitle text__secondary">CONTACT</span>
                                <h2 class="section__heading--title mb-10">Get I contact work </h2> 
                                <p class="section__heading--desc">Promote your blog posts, case udie, and product ouncems
                                    with the the branded videoscustomers coming back for
                                    services Makes best effort.</p>
                            </div>
                            <form class="contact__form" action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="contact__input--field" placeholder="Your name" type="text">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="contact__input--field" placeholder="Your email" type="text">
                                    </div>
                                </div>
                                <textarea class="contact__textarea--field" placeholder="Message"></textarea>
                                <button class="contact__button primary__btn">Send Request</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact__info">
                            <div class="contact__info--items d-flex align-items-center">
                                <span class="contact__info--icon">
                                    <svg width="25" height="34" fill="currentColor" stroke="currentColor" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path></svg>
                                </span>
                                <div class="contact__info--content">
                                    <h3 class="contact__info--title">Call Me</h3>
                                    <p class="contact__info--desc">
                                        <a href="tel:+880254615566">+880254615566</a> <br>
                                        <a href="tel:+880254615566">+880254615566</a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact__info--items d-flex align-items-center">
                                <span class="contact__info--icon">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </span>
                                <div class="contact__info--content">
                                    <h3 class="contact__info--title">Email Us</h3>
                                    <p class="contact__info--desc">
                                        <a href="mailto:info@example.com">info@example.com</a> <br>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact__info--items d-flex align-items-center">
                                <span class="contact__info--icon">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </span>
                                <div class="contact__info--content">
                                    <h3 class="contact__info--title">Address</h3>
                                    <p class="contact__info--desc">
                                        20, 25 Dhaka,0123 <br>
                                            Ratrba baraj,20
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contact section -->

        <!-- Start contact map area -->
        <div class="contact__map--area">
            <div class="container">
                <iframe class="contact__map--iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7887.465355142307!2d-0.13384360843222626!3d51.4876034467734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760532743b90e1%3A0x790260718555a20c!2sU.S.%20Embassy%2C%20London!5e0!3m2!1sen!2sbd!4v1632035375945!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!-- End contact map area -->

        <!-- Start blog section -->
        <section class="blog__section section--padding" id="blog">
            <div class="container">
                <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                    <div class="section__heading max-width-580">
                        <span class="section__heading--subtitle text__secondary">LATEST BLOGS</span>
                        <h2 class="section__heading--title">Blog Latest of News 
                            tricks & Updates</h2> 
                    </div>
                    <div class="section__heading--right max-width-450">
                        <p class="section__heading--desc">Promote your blog posts, case udie, and product ouncems
                            with the the branded videoscustomers coming back for
                            services Makes best effort.</p>
                    </div>
                </div>
                <div class="blog__section--inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="blog__card">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal">
                                    <div class="blog__card--thumbnail">
                                        <img src="assets/img/blog/blog1.png" alt="img">
                                    </div>
                                    <div class="blog__card--content">
                                        <span class="blog__card--tag">UI /UX DESIGN</span>
                                        <h3 class="blog__card--title mb-12">Angular team welarges to trequests blog</h3>
                                        <p class="blog__card--desc">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor incididunt ut labore et dolore aliqu</p>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="blog__card">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal">
                                    <div class="blog__card--thumbnail">
                                        <img src="assets/img/blog/blog2.png" alt="img">
                                    </div>
                                    <div class="blog__card--content">
                                        <span class="blog__card--tag">HTML AND CSS</span>
                                        <h3 class="blog__card--title mb-12">How to create a website using html</h3>
                                        <p class="blog__card--desc">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor incididunt ut labore et dolore aliqu</p>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="blog__card">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal">
                                    <div class="blog__card--thumbnail">
                                        <img src="assets/img/blog/blog3.png" alt="img">
                                    </div>
                                    <div class="blog__card--content">
                                        <span class="blog__card--tag">Shopify</span>
                                        <h3 class="blog__card--title mb-12">We mack team welarges to trequests blog</h3>
                                        <p class="blog__card--desc">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor incididunt ut labore et dolore aliqu</p>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog section -->

        <!-- Start footer section -->
        <footer class="footer footer__section footer__bg">
            <div class="container">
                <div class="main__footer d-flex justify-content-between align-items-center">
                    <p class="copyright__content mb-0">Developed with <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="text-paragraph" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        </span>  by <span><a class="text__secondary" href="#">Morex</a></span>© 2023</p>
                    <ul class="footer__menu d-flex">
                        <li><a class="footer__menu--link" href="shop.html">Terms & Condition</a></li>
                        <li><a class="footer__menu--link" href="about.html"> Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- End footer section -->

    </main>

    <div class="modal fade" id="portfolioModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered portfolio__modal--dialog">
          <div class="modal-content modal-content-height">
            <button type="button" class="btn-close portfolio__modal--colse" data-bs-dismiss="modal" aria-label="Close">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            <div class="modal-body portfolio__modal--body">
                <h2 class="portfolio__modal--title text-center mb-30">Illustration Project</h2>
                <div class="portfolio__modal--info d-flex align-items-center mb-20">
                    <div class="portfolio__modal--info--list">
                        <p class="portfolio__modal--info--text">
                            <span class="portfolio__modal--info__icon"><svg width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></span>
                            Project :
                            <span class="portfolio__modal--info__name">Website</span>
                        </p>
                        <p class="portfolio__modal--info--text">
                            <span class="portfolio__modal--info__icon"><svg width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></span>
                            Languages :
                            <span class="portfolio__modal--info__name">Photoshop, Illustration</span>
                        </p>
                    </div>
                    <div class="portfolio__modal--info--list">
                        <p class="portfolio__modal--info--text">
                            <span class="portfolio__modal--info__icon"><svg width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                            Client :
                            <span class="portfolio__modal--info__name">Envato</span>
                        </p>
                        <p class="portfolio__modal--info--text">
                            <span class="portfolio__modal--info__icon"><svg width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg></span>
                            Preview :
                            <a class="portfolio__modal--info__name" href="https://www.envato.com" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                        </p>
                    </div>
                </div>
                <p class="portfolio__modal--info__desc mb-30">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia placeat magnam possimus iusto blanditiis pariatur labore explicabo quo repellat hic dolorum numquam asperiores, voluptatum fugiat reiciendis aspernatur, non, odio aperiam voluptas ex tempora vitae. Dolor, consequatur quidem! Quas magni distinctio dolorum dolore natus, vel numquam accusamus. Nostrum eligendi recusandae qui tempore deserunt!
                </p>
                <div class="portfolio__modal--info__media">
                    <img src="assets/img/other/portfolio-big1.png" alt="img">
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="blogModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered blog__modal--dialog">
          <div class="modal-content modal-content-height">
            <button type="button" class="btn-close portfolio__modal--colse" data-bs-dismiss="modal" aria-label="Close">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            <div class="modal-body blog__modal--body">
                <div class="blog__details--media mb-30">
                    <img src="assets/img/blog/blog-details-1.png" alt="img">
                </div>
                <div class="blog__details--content mb-30">
                    <h2 class="blog__details--title mb-20">Angular team welarges to trequests blog</h2>
                    <p class="blog__details--desc">It is a long established fact that a reader will be distracted by the readable content of a page is when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ique maiestatis sum quod sum ut alienum nec et to summo possim persequeris vix mea. Adhuc quodsi qui, sit no tale essent electramei sum sums rodesset in pro, quo scripta feugait vidisse. Lorem ipsum dolor sit amet, eu duo ferri labor dicat Mea ex modo reque senserit, et sed hinc dolor, scaevola sum salutandi expetendis vix ne his quod mundi consequat sum. There are not many of passages of lorem</p>
                    <p class="blog__details--desc">It is a long established fact that a reader will be distracted by the readable content of a page is when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                    <blockquote>
                        <svg class="blockquote__svg" aria-hidden="true" viewBox="0 0 24 27" fill="none"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"></path></svg>
                        <p class="blockquote__desc">"Tailwind css is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                    </blockquote>
                </div>
                <div class="comment__box">
                    <div class="reviews__comment--area2 mb-30">
                        <h2 class="blog__comment--title style2 mb-30">Recent Comment</h2>
                        <div class="reviews__comment--inner">
                            <div class="reviews__comment--list d-flex">
                                <div class="reviews__comment--thumb">
                                    <img src="assets/img/other/comment-thumb1.webp" alt="comment-thumb">
                                </div>
                                <div class="reviews__comment--content ">
                                    <div class="reviews__comment--top d-flex justify-content-between">
                                        <div class="reviews__comment--top__left">
                                            <h3 class="reviews__comment--content__title">Jakes on</h3>
                                            <span class="reviews__comment--content__date2">December 02, 2023</span>
                                        </div>
                                        <button class="comment__reply--btn primary__btn">Reply</button>
                                    </div>
                                    <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                </div>
                            </div>
                            <div class="reviews__comment--list margin__left d-flex">
                                <div class="reviews__comment--thumb">
                                    <img src="assets/img/other/comment-thumb2.webp" alt="comment-thumb">
                                </div>
                                <div class="reviews__comment--content ">
                                    <div class="reviews__comment--top d-flex justify-content-between">
                                        <div class="reviews__comment--top__left">
                                            <h3 class="reviews__comment--content__title">Laura Johnson</h3>
                                            <span class="reviews__comment--content__date2">December 02, 2023</span>
                                        </div>
                                        <button class="comment__reply--btn primary__btn">Reply</button>
                                    </div>
                                    <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                </div>
                            </div>
                            <div class="reviews__comment--list d-flex">
                                <div class="reviews__comment--thumb">
                                    <img src="assets/img/other/comment-thumb3.webp" alt="comment-thumb">
                                </div>
                                <div class="reviews__comment--content ">
                                    <div class="reviews__comment--top d-flex justify-content-between">
                                        <div class="reviews__comment--top__left">
                                            <h3 class="reviews__comment--content__title">Richard Smith</h3>
                                            <span class="reviews__comment--content__date2">December 02, 2023</span>
                                        </div>
                                        <button class="comment__reply--btn primary__btn">Reply</button>
                                    </div>
                                    <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__comment--reply__area">
                        <form action="#">
                            <h2 class="blog__comment--title mb-30">Leave A Comment</h2>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-20">
                                    <label>
                                        <input class="reviews__comment--reply__input" placeholder="Your Name...." type="text">
                                    </label>
                                </div>  
                                <div class="col-lg-4 col-md-6 mb-20">
                                    <label>
                                        <input class="reviews__comment--reply__input" placeholder="Your Email...." type="email">
                                    </label>
                                </div> 
                                <div class="col-lg-4 col-md-6 mb-20">
                                    <label>
                                        <input class="reviews__comment--reply__input" placeholder="Your Website...." type="text">
                                    </label>
                                </div> 
                                <div class="col-12 mb-15">
                                    <textarea class="reviews__comment--reply__textarea" placeholder="Your Comments...." ></textarea>
                                </div> 
                                 
                            </div>
                            <button class="blog__comment--btn primary__btn" data-hover="Submit" type="submit">Post Comment</button>
                        </form>   
                    </div> 
                </div> 
            </div>
          </div>
        </div>
    </div>



    <!-- Scroll top bar -->
    <button id="scroll__top"><svg class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round"  stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    
   <!-- All Script JS Plugins here  -->
   <script src="{{ asset('assets/js/vendor/popper.js') }}" defer="defer"></script>
   <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
   <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
   <script src="{{ asset('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
   <script src="{{ asset('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>

  <!-- Customscript js -->
  <script src="{{ asset('assets/js/script.js') }}"></script>

  <!-- Dark to light js -->
  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.getElementById("light__to--dark")?.classList.add("dark--version");
    } 
    if (localStorage.getItem("theme-color") === "light") {
      document.getElementById("light__to--dark")?.classList.remove("dark--version");
    } 
  </script>
  
</body>
</html>