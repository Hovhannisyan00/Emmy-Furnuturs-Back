<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Emmy Furniture</title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Furnitureiva - Responsive Furniture HTML Template">
    <meta name="keywochs" content="Furnitureiva, Furniture Shop Design, html, template, responsive, corporate, business, Shop">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <!-- favicon -->
    <link rel="icon" href="./images/logo-emmy.png" type="image/x-icon">
    <!--Style-->
    <link rel="stylesheet" href="{{ asset('css/web/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
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
                                <div class="dropdown show"> <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My Account </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">Cart</a> <a class="dropdown-item" href="#">Checkout</a> <a class="dropdown-item" href="#">My Account</a> <a class="dropdown-item" href="#">Login</a> </div>
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
                                        <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="{{ route('web.single-product') }}">Single Product</a> </li>
                                        <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="cart-page.html">Cart Page</a> </li>
                                        <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="checkout.html">Checkout</a> </li>
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
                            <div class="ch-navbar-basket-wrap">
                                <button class="ch-navbar-basket fas fa-shopping-cart" data-ch-navbar-toggle=".cart-inline"><span>2</span></button>
                                <div class="cart-inline">
                                    <div class="cart-inline-header">
                                        <h5 class="cart-inline-title">In cart:<span> 2</span> Products</h5>
                                        <h6 class="cart-inline-title">Total price:<span> $30</span></h6>
                                    </div>
                                    <div class="cart-inline-body">
                                        <div class="cart-inline-item">
                                            <div class="unit unit-spacing-sm align-items-center">
                                                <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="images/about/post-mini-1.jpg" alt="" width="100" height="90"/></a></div>
                                                <div class="unit-body">
                                                    <h6 class="cart-inline-name"><a href="single-product.html">Unicorn Furniture</a></h6>
                                                    <div>
                                                        <div class="group-xs group-middle">
                                                            <div class="table-cart-stepper">
                                                                <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                                                            </div>
                                                            <h6 class="cart-inline-title">$13.00</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-inline-item">
                                            <div class="unit unit-spacing-sm align-items-center">
                                                <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="images/about/post-mini-2.jpg" alt="" width="100" height="90"/></a></div>
                                                <div class="unit-body">
                                                    <h6 class="cart-inline-name"><a href="single-product.html">Strawberry CupFurnitures</a></h6>
                                                    <div>
                                                        <div class="group-xs group-middle">
                                                            <div class="table-cart-stepper">
                                                                <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                                                            </div>
                                                            <h6 class="cart-inline-title">$17.00</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-inline-footer">
                                        <div class="group-sm"><a class="button button-default-outline-2 button-zakaria" href="cart-page.html">Go to cart</a><a class="button button-primary button-zakaria" href="checkout.html">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
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
                                        <div class="owl-carousel" data-items="1" data-dots="true" data-autoplay="true"> <img src="images/about/image-1.jpg" class="img-responsive" alt="" /> <img src="images/about/image-4.jpg" class="img-responsive" alt="" /> <img src="images/about/image-8.jpg" class="img-responsive" alt="" /> </div>
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
    <footer class="section footer-modern footer-modern-2">
        <div class="footer-modern-body section-md">
            <div class="container">
                <div class="row row-40 row-md-50 justify-content-xl-between">
                    <div class="col-md-10 col-lg-3 col-xl-4 wow fadeInRight">
                        <div class="inset-xl-right-70 block-1">
                            <div class="footer-classic-brand">
                                <!--Brand-->
                                <a href="index.html"><img class="logo-default" src="./images/logo-emmy.png" alt=""></a> </div>
                            <p class="footer-classic-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy text ever since the 1500s, when an unknown printer took a galley book.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-7 col-lg-5 wow fadeInRight" data-wow-delay=".1s">
                        <h5 class="footer-modern-title">Navigation</h5>
                        <ul class="footer-modern-list footer-modern-list-2 d-sm-inline-block d-md-block">
                            <li><a href="{{ route('web.about') }}">About Us</a></li>
                            <li><a href="{{ route('web.team') }}">Our Team</a></li>
{{--                            <li><a href="testimonials.html">Testimonials</a></li>--}}
                            <li><a href="{{ route('web.shop') }}">Shop</a></li>
                            <li><a href="{{ route('web.contact-us') }}">Contact Us</a></li>
                            <li><a href="{{ route('web.checkout') }}">Wedding Furnitures</a></li>
                            <li><a href="{{ route('web.checkout') }}">Birthday Furnitures</a></li>
                            <li><a href="{{ route('web.checkout') }}">Macarons</a></li>
                            <li><a href="{{ route('web.checkout') }}">CupFurnitures</a></li>
                            <li><a href="{{ route('web.checkout') }}">Biscuits</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
                        <h5 class="footer-modern-title">Get in touch</h5>
                        <ul class="contacts-creative">
                            <li>
                                <div class="unit unit-spacing-sm flex-column flex-md-row">
                                    <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                    <div class="unit-body"><a href="#">272B St#4, 1st Floor<br/>
                                            DC Office, Washington USA</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-spacing-sm flex-column flex-md-row">
                                    <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                    <div class="unit-body"><a href="tel:#">+01-23-4226789</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-spacing-sm flex-column flex-md-row">
                                    <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                                    <div class="unit-body"><a href="#">hello@example.com</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-modern-panel text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-copyright">
                            <p>
                                &copy; 2025
                                <a href="https://www.linkedin.com/in/arsen-hovhannisyan-b861aa347/" target="_blank" rel="noopener noreferrer">Arsen</a>.
                                All Rights Reserved.
                                <a href="privacy-policy.html">Privacy Policy</a>
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-payment-icon"> <a href="#"><img src="images/about/paymentimg.png" alt=""></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('js/web/js/header.js') }}"></script>
<script src="{{ asset('js/web/js/core.min.js') }}"></script>
<script src="{{ asset('js/web/js/script.js') }}"></script>
</body>
</html>
