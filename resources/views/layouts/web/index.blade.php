<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Emmy Furniture Munich</title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Furnitureiva - Responsive Furniture HTML Template">
    <meta name="keywochs" content="Furnitureiva, Furniture Shop Design, html, template, responsive, corporate, business, Shop">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <!-- favicon -->
    <link rel="icon" href="{{ asset("img/web/logo-emmy.png") }}" type="image/x-icon">
    <!--Style-->
    <link rel="stylesheet" href="{{ asset('css/web/bootstrap.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/web/fonts.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/web/style.css') }}">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/web/footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('project/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('project/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('project/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
</head>
<style>
    .team-classic-list-social {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
    }
    .icon.mdi {
        font-size: 20px;
        color: #555;
        transition: color 0.3s;
    }
    .icon.mdi:hover {
        color: #007bff;
    }
</style>
<body>
<!-- page -->
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <div class="header-top">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="topbar-left text-left">
                            <p>Welcome to Emmy Furniture Online Shopping Store !</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="header-top-dropdown d-flex justify-content-center justify-content-lg-end">
                            <div class="single-dropdown">
                                <div class="dropdown show">
                                    <span class="d-none d-sm-inline-block">Language:</span>
                                    <a class="btn language_btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span id="selected-language">English</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#" data-lang="Русский">Русский</a>
                                        <a class="dropdown-item" href="#" data-lang="English">English</a>
                                    </div>
                                </div>
                            </div>
                            <span class="separator pl-15 pr-15"> </span>
                            <div class="single-dropdown">
                                <div class="dropdown show">
                                    <span class="d-none d-sm-inline-block">Currency:</span>
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="currencyDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span id="selected-currency">USD $</span>
                                    </a>
                                    <!-- <span class="usd_change" id="price-currency">USD $</span> -->
                                    <div class="dropdown-menu" aria-labelledby="currencyDropdown">
                                        <a class="dropdown-item" href="#" data-currency="RUB ₽" data-rate="95">RUB ₽</a>
                                        <a class="dropdown-item" href="#" data-currency="USD $" data-rate="1">USD $</a>
                                        <a class="dropdown-item" href="#" data-currency="EUR €" data-rate="0.92">EUR €</a>
                                    </div>
                                </div>
                            </div>

                            <div class="single-dropdown">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                       id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Account
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @guest
                                            {{-- Если пользователь гость --}}
                                            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                        @else
                                            {{-- Если пользователь авторизован --}}
                                            <span class="dropdown-item-text">👤 {{ Auth::user()->name }}</span>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('logout') }}" method="POST" class="m-0">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Logout</button>
                                            </form>
                                        @endguest
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ch-navbar-wrap">
            <nav class="ch-navbar ch-navbar-classic" data-layout="ch-navbar-fixed" data-sm-layout="ch-navbar-fixed" data-md-layout="ch-navbar-fixed" data-md-device-layout="ch-navbar-fixed" data-lg-layout="ch-navbar-static" data-lg-device-layout="ch-navbar-fixed" data-xl-layout="ch-navbar-static" data-xl-device-layout="ch-navbar-static" data-xxl-layout="ch-navbar-static" data-xxl-device-layout="ch-navbar-static" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="100px" data-xxl-stick-up-offset="100px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="ch-navbar-main-outer">
                    <div class="ch-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="ch-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="ch-navbar-toggle" data-ch-navbar-toggle=".ch-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="ch-navbar-brand">
                                <!--Brand--><a href="{{ route('web.home') }}"><img class="logo-default" src="{{ asset('img/web/logo-emmy.png') }}" alt="Logo" /></a> </div>
                        </div>
                        <div class="ch-navbar-nav-wrap">
                            <ul class="ch-navbar-nav">
                                <li class="ch-nav-item active">
                                    <a class="ch-nav-link" href="{{ route('web.home') }}">Home</a>
                                </li>
                                <li class="ch-nav-item">
                                    <a class="ch-nav-link" href="#">Pages</a>
                                    <ul class="ch-menu ch-navbar-dropdown">
                                        <li class="ch-dropdown-item">
                                            <a class="ch-dropdown-link" href="{{ route('web.about') }}">About Us</a>
                                        </li>
                                        <li class="ch-dropdown-item">
                                            <a class="ch-dropdown-link" href="{{ route('web.what-we-offer') }}">What We Offer</a>
                                        </li>
                                        <li class="ch-dropdown-item">
                                            <a class="ch-dropdown-link" href="{{ route('web.team') }}">Our Team</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="ch-nav-item">
                                    <a class="ch-nav-link" href="{{ route('web.blog') }}">Blog</a>
                                </li>
                                <li class="ch-nav-item">
                                    <a class="ch-nav-link" href="{{ route('web.gallery') }}">Gallery</a>
                                </li>
                                <li class="ch-nav-item">
                                    <a class="ch-nav-link" href="{{ route('web.products') }}">Products</a>
                                </li>


                                {{--                                <li class="ch-nav-item"><a class="ch-nav-link" href="#">Elements</a>--}}
{{--                                    <ul class="ch-menu ch-navbar-megamenu">--}}
{{--                                        <li class="ch-megamenu-item ch-megamenu-item-1">--}}
{{--                                            <h6 class="ch-megamenu-title"><span class="ch-megamenu-icon mdi mdi-apps"></span><span class="ch-megamenu-text">Elements</span></h6>--}}
{{--                                            <ul class="ch-megamenu-list">--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="typography.html">Typography</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="icon-lists.html">Icon lists</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="progress-bars.html">Progress bars</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="calls-to-action.html">Calls to action</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="tabs-and-accordions.html">Tabs &amp; accochions</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="buttons.html">Buttons</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="tables.html">Tables</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="forms.html">Forms</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="counters.html">Counters</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="grid-system.html">Grid system</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="ch-megamenu-item ch-megamenu-item-2">--}}
{{--                                            <h6 class="ch-megamenu-title"><span class="ch-megamenu-icon mdi mdi-layers"></span><span class="ch-megamenu-text">Additional pages</span></h6>--}}
{{--                                            <ul class="ch-megamenu-list">--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="404-page.html">404 Page</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="contact-us.html">Contact Us</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="privacy-policy.html">Privacy Policy</a></li>--}}
{{--                                                <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="search-results.html">Search Results</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="ch-megamenu-item ch-megamenu-banner">--}}
{{--                                            <div class="ch-megamenu-title"><span class="ch-megamenu-icon mdi icon-side-lamp-1"></span><span class="ch-megamenu-text">Welcome to Our Store</span></div>--}}
{{--                                            <a class="banner-classic" href="grid-shop.html"><img src="images/about/banner.jpg" alt="" width="300" height="202"/></a> </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                                <li class="ch-nav-item"><a class="ch-nav-link" href="{{ route('web.shop') }}">Shop</a>
                                    <ul class="ch-menu ch-navbar-dropdown">
                                        <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="{{ route('web.cart') }}">Cart Page</a> </li>
                                        <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="{{route('order.checkout')}}">Checkout</a> </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="ch-navbar-main-element">
                            <!-- RD Navbar Search-->
                            <div class="ch-navbar-search ch-navbar-search-2">
                                <button class="ch-navbar-search-toggle fas fa-search fa-2x" data-ch-navbar-toggle=".ch-navbar-search"></button>
                                <form class="ch-search" action="search-results.html" data-search-live="ch-search-results-live" method="GET">
                                    <div class="form-wrap">
                                        <input class="ch-navbar-search-form-input form-input" id="ch-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                                        <label class="form-label" for="ch-navbar-search-form-input">Search...</label>
                                        <div class="ch-search-results-live" id="ch-search-results-live"></div>
                                        <button class="ch-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                            <!-- RD Navbar Basket-->
                            @include('web.components.basket-navbar')


                            <a class="ch-navbar-basket ch-navbar-basket-mobile fl-bigmug-line-shopping202 ch-navbar-fixed-element-2" href="cart-page.html"><span>2</span></a>
                            <button class="ch-navbar-project-hamburger ch-navbar-project-hamburger-open ch-navbar-fixed-element-1" type="button" data-multitoggle=".ch-navbar-main" data-multitoggle-blur=".ch-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate"><span class="project-hamburger"><span class="project-hamburger-line"></span><span class="project-hamburger-line"></span><span class="project-hamburger-line"></span><span class="project-hamburger-line"></span></span></button>
                        </div>
                        <div class="ch-navbar-project">
                            <div class="ch-navbar-project-header">
                                <button class="ch-navbar-project-hamburger ch-navbar-project-hamburger-close" type="button" data-multitoggle=".ch-navbar-main" data-multitoggle-blur=".ch-navbar-wrap" data-multitoggle-isolate><span class="project-close"><span></span><span></span></span></button>
                                <h5 class="ch-navbar-project-title">Our Contacts</h5>
                            </div>
                            <div class="ch-navbar-project-content">
                                <div>
                                    <div>
                                        <!-- Owl Carousel-->
                                        <div class="owl-carousel" data-items="1" data-dots="true" data-autoplay="true"> </div>
                                        <ul class="contacts-modern">
                                            <li><a href="#">272B St#4, 1st Floor<br/>
                                                    DC Office, Washington USA</a></li>
                                            <li><a href="tel:#">+01-23-4226789</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="list-inline list-social list-inline-xl">
                                            <li><a class="icon mdi mdi-vk" href="#"></a></li>
                                            <li><a class="icon mdi mdi-telegram" href="#"></a></li>
                                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                            <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    {{ $slot }}

    <!-- Page Footer-->
    @include('web.components.footer')

</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('js/web/js/header.js') }}"></script>
<script src="{{ asset('js/web/js/core.min.js') }}"></script>
<script src="{{ asset('js/web/js/script.js') }}"></script>
</body>
</html>
