<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/progressbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="container" class="container-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>

        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
</div>



<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>

<!-- side toggle start -->
<aside class="fix">
    <div class="side-info">
        <div class="side-info-content">
            <div class="offset-widget offset-header">
                <div class="offset-logo">
                    <a href="/">
                        <img src="{{asset('images/logo.png')}}" alt="site logo">
                    </a>
                </div>
                <button id="side-info-close" class="side-info-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="mobile-menu d-xl-none fix"></div>
            <div class="offset-widget-box">
                <h2 class="title">Dane kontaktowe</h2>
                <div class="contact-meta">
                    <div class="contact-item">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <span class="text"><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></span>
                    </div>
                    <div class="contact-item">
                        <span class="icon"><i class="fa-solid fa-phone"></i></span>
                        <span class="text"><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<div class="offcanvas-overlay"></div>
<header class="header-area">
    <div class="header-top-area d-none d-lg-block">
        <div class="container">
            <div class="header-top-area-inner">
                <div class="section-content">
                    <div class="contact-meta">
                        <div class="contact-item">
                            <span class="icon"><img src="{{asset('images/icon/icon-1.webp')}}" alt="icon"></span>
                            <span class="text"><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><img src="{{asset('images/icon/icon-2.webp')}}" alt="icon"></span>
                            <span class="text"><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main header-sticky">
        <div class="container">
            <div class="header-area__inner">
                <div class="header__logo">
                    <a href="/">
                        <img src="{{asset('images/logo.png')}}" class="normal-logo" alt="Site Logo">
                    </a>
                </div>
                <div class="header__nav">
                    <nav class="main-menu">
                        @include('default.nav_item.main', ['name' => 'main'])
                    </nav>
                </div>
                <div class="header__navicon d-xl-none">
                    <button class="side-toggle">
                        <i class="fa-solid fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->

<div class="has-smooth" id="has_smooth"></div>
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div class="body-wrapper">



            <main>
{{--@include('default._helpers.lang_nav')--}}

                @yield('content')

            </main>

            <!-- footer area start  -->
            <footer class="footer-area">
                <div class="container">
                    <div class="footer-widget-wrapper-box section-spacing-top">
                        <div class="area-bg">
                            <img src="{{asset('images/shape/shape-1.webp')}}" alt="image">
                        </div>
                        <div class="footer-widget-wrapper">
                            <div class="footer-widget-box">
                                <div class="footer-logo">
                                    <img src="{{asset('images/logo.png')}}" alt="site-logo">
                                </div>
                                <div class="description-text">
                                    <div class="text-wrapper">
                                        <p class="text">{!! getConstField('company_description') !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-widget-box">
                                <h2 class="title">Dane kontaktowe</h2>
                                <div class="contact-meta">
                                    <div class="contact-item">
                                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                                        <span class="text"><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></span>
                                    </div>
                                    <div class="contact-item">
                                        <span class="icon"><i class="fa-solid fa-phone"></i></span>
                                        <span class="text"><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-widget-box">
                                <h2 class="title">Przydatne linki</h2>
                                <ul class="footer-nav-list">
                                    <li><a href="{{route('contact.show')}}"><i class="fa-solid fa-angle-right"></i> Kontakt</a></li>
                                    @include('default.offer.home2')
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-area-inner">
                        <div class="copyright-text">
                            <p class="text"><?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.pl">Palmax</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/counter.js')}}"></script>
<script src="{{asset('js/progressbar.js')}}"></script>
<script src="{{asset('js/gsap.min.js')}}"></script>
<script src="{{asset('js/ScrollSmoother.min.js')}}"></script>
<script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/backToTop.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

@stack('scripts.body.bottom')
</body>
</html>
