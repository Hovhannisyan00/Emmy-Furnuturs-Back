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
<style>
        /* Header Top Section Styling */
    .header-top {
        /*background: linear-gradient(135deg, #1e293b 0%, #334155 100%);*/
        padding: 12px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .topbar-left p {
        color: #cbd5e1;
        margin: 0;
        font-size: 23px;
        font-weight: 500;
    }

    .header-top-dropdown {
        gap: 15px;
    }

    .separator {
        color: #475569;
        font-size: 18px;
    }

    /* Language Selector Styling */
    .language-selector {
        position: relative;
    }

    .language-label {
        font-weight: 600;
        color: #cbd5e1;
        margin-right: 8px;
        font-size: 14px;
    }

    .language-btn {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        color: white;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        position: relative;
        overflow: hidden;
    }

    .language-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .language-btn:hover::before {
        left: 100%;
    }

    .language-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4);
        color: white;
        background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
    }

    .language-btn:active {
        transform: translateY(0);
    }

    .language-flag {
        font-size: 1.3em;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        transition: transform 0.3s ease;
    }

    .language-btn:hover .language-flag {
        transform: scale(1.1);
    }

    .language-text {
        font-size: 0.95em;
        font-weight: 500;
    }

    .language-arrow {
        font-size: 0.7em;
        transition: transform 0.3s ease;
        margin-left: 4px;
    }

    .language-btn.show .language-arrow {
        transform: rotate(180deg);
    }

    .language-dropdown {
        border: none;
        border-radius: 16px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15), 0 5px 15px rgba(0, 0, 0, 0.1);
        padding: 12px;
        min-width: 160px;
        background: white;
        margin-top: 12px !important;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .language-option {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        border-radius: 12px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        color: #374151;
        text-decoration: none;
        font-weight: 500;
        position: relative;
        overflow: hidden;
    }

    .language-option::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(99, 102, 241, 0.1), transparent);
        transition: left 0.5s ease;
    }

    .language-option:hover::before {
        left: 100%;
    }

    .language-option:hover {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        color: white;
        transform: translateX(8px);
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
    }

    .language-option .language-flag {
        font-size: 1.2em;
        transition: transform 0.3s ease;
    }

    .language-option:hover .language-flag {
        transform: scale(1.2);
    }

    .language-option .language-text {
        font-weight: 600;
        transition: color 0.3s ease;
    }

    /* Account Dropdown Styling */
    .single-dropdown .btn-secondary {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 25px;
        padding: 10px 20px;
        color: #e2e8f0;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        backdrop-filter: blur(10px);
    }

    .single-dropdown .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .single-dropdown .dropdown-menu {
        border: none;
        border-radius: 16px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15), 0 5px 15px rgba(0, 0, 0, 0.1);
        padding: 12px;
        background: white;
        margin-top: 12px !important;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .single-dropdown .dropdown-item {
        padding: 12px 16px;
        border-radius: 12px;
        transition: all 0.3s ease;
        color: #374151;
        font-weight: 500;
    }

    .single-dropdown .dropdown-item:hover {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        color: white;
        transform: translateX(5px);
    }

    .single-dropdown .dropdown-item-text {
        color: #6366f1;
        font-weight: 600;
        padding: 12px 16px;
    }

    .single-dropdown .dropdown-divider {
        margin: 8px 0;
        border-color: #e5e7eb;
    }

    .single-dropdown .dropdown-item button {
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        padding: 0;
    }

    /* Animations */
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-15px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .language-dropdown,
    .single-dropdown .dropdown-menu {
        animation: slideDown 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .header-top-dropdown {
            justify-content: center !important;
            gap: 10px;
        }

        .language-label {
            display: none !important;
        }

        .language-btn,
        .single-dropdown .btn-secondary {
            padding: 8px 16px;
            font-size: 14px;
        }

        .language-text {
            font-size: 0.85em;
        }
    }

    @media (max-width: 576px) {
        .header-top-dropdown {
            flex-direction: column;
            gap: 8px;
        }

        .separator {
            display: none;
        }

        .single-dropdown {
            width: 100%;
            text-align: center;
        }

        .language-btn,
        .single-dropdown .btn-secondary {
            width: 100%;
            justify-content: center;
        }
    }

    /* Navigation Menu Enhancement */
    .ch-navbar-classic {
        background: white;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border-radius: 0 0 20px 20px;
    }

    .ch-navbar-brand img {
        transition: transform 0.3s ease;
    }

    .ch-navbar-brand:hover img {
        transform: scale(1.05);
    }

    .ch-nav-link {
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
    }

    .ch-nav-link:hover {
        color: #6366f1;
        transform: translateY(-2px);
    }

    .ch-nav-link::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        transition: width 0.3s ease;
    }

    .ch-nav-link:hover::after {
        width: 100%;
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
                            <p>@lang('messages.welcome')</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="header-top-dropdown d-flex justify-content-center justify-content-lg-end">
                            <!-- Language Switcher -->
{{--                            <div class="single-dropdown">--}}
{{--                                <div class="dropdown show">--}}
{{--                                    <div class="language-selector">--}}
{{--                                        <span class="d-none d-sm-inline-block language-label">@lang('messages.language'):</span>--}}
{{--                                        <a class="btn language-btn btn-gradient dropdown-toggle" href="#" role="button" id="dropdownMenuLink"--}}
{{--                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                            <span class="language-flag">--}}
{{--                                                @if(app()->getLocale() == 'ru')--}}
{{--                                                    🇷🇺--}}
{{--                                                @else--}}
{{--                                                    🇺🇸--}}
{{--                                                @endif--}}
{{--                                            </span>--}}
{{--                                                                        <span id="selected-language" class="language-text">--}}
{{--                                                {{ app()->getLocale() == 'ru' ? 'Русский' : 'English' }}--}}
{{--                                            </span>--}}
{{--                                            <span class="language-arrow">▼</span>--}}
{{--                                        </a>--}}
{{--                                        <div class="dropdown-menu language-dropdown" aria-labelledby="dropdownMenuLink">--}}
{{--                                            <a class="dropdown-item language-option" href="{{ route('language.switch', 'ru') }}">--}}
{{--                                                <span class="language-flag">🇷🇺</span>--}}
{{--                                                <span class="language-text">Русский</span>--}}
{{--                                            </a>--}}
{{--                                            <a class="dropdown-item language-option" href="{{ route('language.switch', 'en') }}">--}}
{{--                                                <span class="language-flag">🇺🇸</span>--}}
{{--                                                <span class="language-text">English</span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>                            <span class="separator pl-15 pr-15"> </span>--}}
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
