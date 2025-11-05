<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>Emmy Furniture Munich</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Furnitureiva - Responsive Furniture HTML Template">
    <meta name="keywords" content="Furnitureiva, Furniture Shop Design, html, template, responsive, corporate, business, Shop">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="{{ asset('js/respond.js') }}"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/web/logo-emmy.png') }}" type="image/x-icon">

    <!-- CSS Styles -->
    <!-- Bootstrap 5 CDN (рекомендуется вместо локального) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Основные стили проекта -->
    <link rel="stylesheet" href="{{ asset('css/web/style.css') }}">

    <!-- Дополнительные стили -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
                            <p>@lang('messages.welcome')</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="header-top-dropdown d-flex justify-content-center justify-content-lg-end">
                            <!-- Language Switcher -->
                            <div class="single-dropdown">
                                <div class="dropdown show">
                                    <span class="d-none d-sm-inline-block">@lang('messages.language'):</span>
                                    <a class="btn language_btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span id="selected-language">
                                            {{ app()->getLocale() == 'ru' ? 'Русский' : 'English' }}
                                        </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('language.switch', 'ru') }}">Русский</a>
                                        <a class="dropdown-item" href="{{ route('language.switch', 'en') }}">English</a>
                                    </div>
                                </div>
                            </div>
                            <span class="separator pl-15 pr-15"> </span>
                            <!-- Account Dropdown -->
                            <div class="single-dropdown">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                       id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('messages.my_account')
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @guest
                                            <a class="dropdown-item" href="{{ route('register') }}">@lang('messages.register')</a>
                                            <a class="dropdown-item" href="{{ route('login') }}">@lang('messages.login')</a>
                                        @else
                                            <span class="dropdown-item-text">👤 {{ Auth::user()->name }}</span>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('logout') }}" method="POST" class="m-0">
                                                @csrf
                                                <button type="submit" class="dropdown-item">@lang('messages.logout')</button>
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

        <!-- Navigation Menu -->
        <div class="ch-navbar-wrap">
            <nav class="ch-navbar ch-navbar-classic">
                <!-- Your existing navbar structure -->
                <div class="ch-navbar-main-outer">
                    <div class="ch-navbar-main">
                        <div class="ch-navbar-panel">
                            <button class="ch-navbar-toggle" data-ch-navbar-toggle=".ch-navbar-nav-wrap"><span></span></button>
                            <div class="ch-navbar-brand">
                                <a href="{{ route('web.home') }}"><img class="logo-default" src="{{ asset('img/web/logo-emmy.png') }}" alt="Logo" /></a>
                            </div>
                        </div>
                        <div class="ch-navbar-nav-wrap">
                            <ul class="ch-navbar-nav">
                                <li class="ch-nav-item active">
                                    <a class="ch-nav-link" href="{{ route('web.home') }}">@lang('messages.home')</a>
                                </li>
                                <li class="ch-nav-item">
                                    <a class="ch-nav-link" href="#">@lang('messages.pages')</a>
                                    <ul class="ch-menu ch-navbar-dropdown">
                                        <li class="ch-dropdown-item">
                                            <a class="ch-dropdown-link" href="{{ route('web.about') }}">@lang('messages.about_us')</a>
                                        </li>
                                        <li class="ch-dropdown-item">
                                            <a class="ch-dropdown-link" href="{{ route('web.what-we-offer') }}">@lang('messages.what_we_offer')</a>
                                        </li>
                                        <li class="ch-dropdown-item">
                                            <a class="ch-dropdown-link" href="{{ route('web.team') }}">@lang('messages.our_team')</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="ch-nav-item">
                                    <a class="ch-nav-link" href="{{ route('web.blog') }}">@lang('messages.blog')</a>
                                </li>
                                <li class="ch-nav-item">
                                    <a class="ch-nav-link" href="{{ route('web.gallery') }}">@lang('messages.gallery')</a>
                                </li>
                                <li class="ch-nav-item">
                                    <a class="ch-nav-link" href="{{ route('web.products') }}">@lang('messages.products')</a>
                                </li>
                                <li class="ch-nav-item">
                                    <a class="ch-nav-link" href="{{ route('web.shop') }}">@lang('messages.shop')</a>
                                    <ul class="ch-menu ch-navbar-dropdown">
                                        <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="{{ route('web.cart') }}">@lang('messages.cart_page')</a></li>
                                        <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="{{ route('order.checkout') }}">@lang('messages.checkout')</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Your existing search and basket components -->
                    </div>
                </div>
            </nav>
        </div>
    </header>

    {{ $slot }}

    <!-- Page Footer-->
    @include('web.components.footer')
</div>

<!-- Your existing scripts -->
<script src="{{ asset('js/web/js/header.js') }}"></script>
<script src="{{ asset('js/web/js/core.min.js') }}"></script>
<script src="{{ asset('js/web/js/script.js') }}"></script>
</body>
</html>
