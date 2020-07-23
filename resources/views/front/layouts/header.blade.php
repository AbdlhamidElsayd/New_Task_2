<!DOCTYPE html>
<html lang="en">

<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/fonts/themify/themify-icons.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/fonts/elegant-font/html-css/style.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/overwrite.css') }}">

    @yield('css')
    <!--===============================================================================================-->
</head>

<body class="animsition">
    <header class="header1">
        <div class="container-menu-header">

            <div class="wrap_header"> <a href="#" class="logo"> <img src="{{ asset('front/images/logo2.png') }}" alt="IMG-LOGO">
                </a>
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li class="sale-noti"> <a href="index.html">Home</a></li>
                            <li> <a href="product1.html" data-toggle="modal" data-target=".bd-product-modal">products</a>

                            </li>
                            <li> <a href="design1.html" data-toggle="modal" data-target=".bd-Designs-modal">Designs</a>

                            </li>
                            <li> <a href="my-ideas.html">MY Ideas</a></li>
                            <li> <a href="about.html">About</a></li>
                            <li> <a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-icons">

                    <div class="header-wrapicon2">

                        <a class="header-icon1 js-show-header-dropdown sign-in" href="login.html"><i class="fa fa-user" aria-hidden="true"></i> Sign In </a>
       <!--
                        <div class="header-cart header-dropdown header-cart-login">
                            <ul class="header-cart-wrapitem login">


                                <li class="header-cart-item">
                                    <a href="Order.html"> My orders </a>
                                </li>
                                <li class="header-cart-item">
                                    <a href="account-settings.html"> Account Settings </a>
                                </li>
                                <li class="header-cart-item">
                                    <a href="#">sign out </a>
                                </li>
                            </ul>


                        </div>
-->
                    </div>

                    <span class="linedivide1"></span>
                    <div class="header-wrapicon2">

                        <a class="header-icon1 js-show-header-dropdown" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>

                        <span class="header-icons-noti">0</span>

                    </div>

                </div>
            </div>
        </div>
        <div class="wrap_header_mobile">
            <a href="index.html" class="logo-mobile"> <img src="images/logo2.png" alt="IMG-LOGO"> </a>
            <div class="btn-show-menu">
                <div class="header-icons-mobile">
                    <a href="login.html" class="header-wrapicon1 dis-block">
                        <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>
                    <span class="linedivide2"></span>
                    <div class="header-wrapicon2">

                        <a class="header-icon1 js-show-header-dropdown" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>

                        <span class="header-icons-noti">0</span>

                    </div>
                </div>
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span></div>
            </div>
        </div>
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-menu-mobile"> <a href="index.html">Home</a></li>


                    <li class="item-menu-mobile"> <a href="product.html">products</a>

                    </li>
                    <li class="item-menu-mobile"><a href="design.html">Designs</a>
                    </li>
                    <li class="item-menu-mobile"> <a href="my-ideas.html">MY Ideas</a></li>
                    <li class="item-menu-mobile"> <a href="about.html">About</a></li>
                    <li class="item-menu-mobile"> <a href="contact.html">Contact</a></li>

                </ul>
            </nav>
        </div>
    </header>
