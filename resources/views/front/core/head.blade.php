<!DOCTYPE html>
<html>


<head>
    <!-- Basic -->
    <base href="https://www.gunayaslan.com.tr/">
    <meta name="charset" content="utf-8" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="keywords" content="Günay ASLAN SMMMM" />
    <meta name="description" content="Serbest Muhasebeci Mali Müşavir Günay ASLAN Malatya / Türkiye" />
    <meta name="author" content="Günay ASLAN SMMMM" />
    <title> SMMM Günay ASLAN , Serbest Muhasebeci Mali Müşavir , Malatya , Yeşilyurt </title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" crossorigin="anonymous">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="{{ asset('front/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('front.index') }}">
                        <img style="width:50px" src="{{ asset('front/images/logo.png') }}"
                            alt="S.M.M.M. Günay ASLAN Serbest Muhasebeci Mali Müşavir , Yeşilyurt/Malatya">
                        <span>Günay ASLAN</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('front.index') }}">Anasayfa </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.services') }}">Hizmetlerimiz</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="price.html">Ödeme Yap</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.contact') }}">İletişim</a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Giriş Yap</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.index') }}">
                                        Admin Panel
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Çıkış Yap') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                        <div class="quote_btn-container">
                            <a href="tel:05373879384">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    0537 387 93 84
                                </span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <section class="service_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                </div>
            </div>
            @yield('content_head')
        </section>
    </div>



    @yield('content')

    @include('front.core.footer')
