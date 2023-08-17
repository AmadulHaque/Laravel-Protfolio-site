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
                                        <a class="header__menu--link" href="#home">Home </a>
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
            @include('frontend.pages.portfolio')
        </section>
        <!-- End portfolio section -->
        
        <!-- Start contact section -->
        <section class="contact__section contact__section--bg mb-0"  style="padding-bottom: 43px;border-bottom: 2px solid #ccc;" id="contact">
            @include('frontend.pages.contact')
        </section>
        <!-- End contact section -->

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
            <div id="PortfolioDetail" class="modal-body portfolio__modal--body">

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
   <script src="{{asset('backend/assets/js/toastr.js')}}"></script>
   <script src="{{asset('backend/assets/js/sweetalert2.js')}}"></script>
  <!-- Customscript js -->
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
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
  
	<script type="text/javascript">
		$(function(){
		 	@if(Session::has('message'))
		      	var type="{{Session::get('alert-type','info')}}"
		      	switch(type){
		          	case 'info':
	               		Toast.fire({
						  icon: 'info',
						  title:"{{ Session::get('message') }}"
						})
		            break;
		          	case 'success':
	               		Toast.fire({
						  icon: 'success',
						  title:"{{ Session::get('message') }}"
						})
		            break;
		          	case 'warning':
	               		Toast.fire({
						  icon: 'warning',
						  title:"{{ Session::get('message') }}"
						})
		            break;
		          	case 'error':
	               		Toast.fire({
						  icon: 'error',
						  title:"{{ Session::get('message') }}"
						})
		            break;
		        } 
		    @endif 
		})
	</script>
  <script>
        $(document).on('click', '.showPortfolioModal', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                type:'get',
                url:'/portfolio/details/'+id,
                data:{id:id},
                success: function(data){
                    $("#PortfolioDetail").html(data);
                    $('#portfolioModal').modal('show')
                }
            });

        });


  </script>
  
</body>
</html>