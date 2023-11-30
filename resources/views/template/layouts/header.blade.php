<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skillzify</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/favicon.ico')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->

    <link rel="stylesheet" href="{{url('frontassets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontassets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontassets/css/aos.min.css')}}">
    <link rel="stylesheet" href="{{url('frontassets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('frontassets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{url('frontassets/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('frontassets/../../../cdn.jsdelivr.net/npm/swiper%409/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{url('frontassets/css/style.css')}}">


    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
          document.documentElement.classList.add("is_dark");
        } 
        if (localStorage.getItem("theme-color") === "light") {
          document.documentElement.classList.remove("is_dark");
        } 
    </script>

</head>


<body class="body__wrapper">
    <!-- pre loader area start -->
    {{-- <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div> --}}
    <!-- pre loader area end -->

   

    <main class="main_wrapper">


        <!-- topbar__section__stert -->
        <div class="topbararea">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="topbar__left">
                            <ul>
                                <li>
                                    Call Us: +91 98218 61897
                                </li>
                                <li>
                                    - Mail Us: sales@skillzify.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="topbar__right">
                            <div class="topbar__icon">
                                <i class="icofont-location-pin"></i>
                            </div>
                            <div class="topbar__text">
                                <p>684 Laxmi Nagar. Delhi, India</p>
                            </div>
                            <div class="topbar__list">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar__section__end -->


        <!-- headar section start -->
        <header>
            <div class="headerarea headerarea__3  header__sticky header__area">
                <div class="container desktop__menu__wrapper">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-6">
                            <div class="headerarea__left">
                                <div class="headerarea__left__logo">

                                    <a href="index.html"><img src="{{url('frontassets/img/logo/logo_1.png')}}" alt="logo"></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 main_menu_wrap">

                            <div class="headerarea__main__menu">
                                <nav>
                                    <ul>
                                        <li><a class="headerarea__has__dropdown" href="{{url('/')}}">Home</a></li>

                                        <li><a class="headerarea__has__dropdown" href="{{url('/about')}}">About</a></li>
                                        <li><a class="headerarea__has__dropdown" href="{{url('/course')}}">Course
                                            {{-- <i class="icofont-rounded-down"></i></a>
                                                <ul class="headerarea__submenu">
                                                    <li><a href="#">Course</a></li>
                                                    <li><a href="#">Course 1</a></li>
                                                    <li><a href="#">Course 2</a></li>
                                                    <li><a href="#">Course 3</a></li>
                                                    <li><a href="#">Course 4</a></li>
                                                    <li><a href="#">Course 5</a></li>
                                                    
                                                </ul>
                                            </li> --}}
                                        <li><a class="headerarea__has__dropdown" href="{{url('/blog')}}">Blog</a></li>
                                        <li><a class="headerarea__has__dropdown" href="{{url('/instructor')}}">Instructor</a></li>
                                        <li><a href="{{url('/contact')}}">Contact</a>

                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="headerarea__right">

                                <div class="header__cart">
                                    <a href="#"> <i class="icofont-cart-alt"></i></a>
                                    <div class="header__right__dropdown__wrapper">
                                        <div class="header__right__dropdown__inner">
                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img src="{{url('frontassets/img/grid/cart1.jpg')}}" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="shop-product.html">Web Directory</a>
                                                    <p>1 x <span class="price">&#8377  80.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img src="{{url('frontassets/img/grid/cart2.jpg')}}" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="shop-product.html">Design Minois</a>
                                                    <p>1 x <span class="price">&#8377  60.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img src="{{url('frontassets/img/grid/cart3.jpg')}}" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="shop-product.html">Crash Course</a>
                                                    <p>1 x <span class="price">&#8377  70.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="dropdown__price">Total: <span>&#8377 1,100.00</span>
                                        </p>
                                        <div class="header__right__dropdown__button">
                                            <a href="#" class="white__color">VIEW
                                        CART</a>
                                            <a href="#" class="blue__color">CHECKOUT</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="headerarea__login">
                                    <a href="{{url('/Registerlogin')}}"><i class="icofont-user-alt-5"></i></a>
                                </div>
                                <div class="headerarea__button">
                                    <a href="#">Get Start</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="container-fluid mob_menu_wrapper">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="mobile-logo">
                            <a class="logo__dark" href="#"><img src="{{url('frontassets/img/logo/logo_1.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-right-wrap">

                            <div class="headerarea__right">

                                <div class="header__cart">
                                    <a href="#"> <i class="icofont-cart-alt"></i></a>
                                    <div class="header__right__dropdown__wrapper">
                                        <div class="header__right__dropdown__inner">
                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img src="{{url('frontassets/img/grid/cart1.jpg')}}" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="shop-product.html">Web Directory</a>
                                                    <p>1 x <span class="price">&#8377  80.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img src="img/grid/cart2.jpg" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="shop-product.html">Design Minois</a>
                                                    <p>1 x <span class="price">&#8377  60.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img src="{{url('frontassets/img/grid/cart3.jpg')}}" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="shop-product.html">Crash Course</a>
                                                    <p>1 x <span class="price">&#8377  70.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="dropdown__price">Total: <span>&#8377 1,100.00</span>
                                        </p>
                                        <div class="header__right__dropdown__button">
                                            <a href="#" class="white__color">VIEW
                                        CART</a>
                                            <a href="#" class="blue__color">CHECKOUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mobile-off-canvas">
                                <a class="mobile-aside-button" href="#"><i class="icofont-navigation-menu"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </header>
        <!-- header section end -->

        <!-- Mobile Menu Start Here -->
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="icofont  icofont-close-line"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="icofont icofont-search-2"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap">

                    <div class="mobile-navigation">

                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="#">Home</a></li>
                                <li class="menu-item-has-children "><a href="#">About</a></li>
                                <li class="menu-item-has-children "><a href="#">Course</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Course</a></li>
                                        <li><a href="#">Course 1</a></li>
                                        <li><a href="#">Course 2</a></li>
                                        <li><a href="#">Course 3</a></li>
                                        <li><a href="#">Course 4</a></li>
                                        <li><a href="#">Course 5</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">blog</a></li>
                                <li class="menu-item-has-children"><a href="#">Instructor</a></li>
                                <li><a class="menu-item-has-children" href="#">Contact</a></li>
                            </ul>
                        </nav>

                    </div>

                </div>
                <div class="mobile-curr-lang-wrap">

                    <div class="single-mobile-curr-lang">
                        <a class="mobile-account-active" href="#">My Account <i class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown account-dropdown-active">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="login.html">Creat Account</a></li>
                                <li><a href="login.html">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-social-wrap">
                    <a class="facebook" href="#"><i class="icofont icofont-facebook"></i></a>
                    <a class="twitter" href="#"><i class="icofont icofont-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="icofont icofont-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="icofont icofont-instagram"></i></a>
                    <a class="google" href="#"><i class="icofont icofont-youtube-play"></i></a>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end Here -->

        <!-- theme fixed shadow -->
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>
        <!-- theme fixed shadow -->