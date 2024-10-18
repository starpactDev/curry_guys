<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
        <meta name="description" content="Starpact - Fast Food Restaurant Html">
        <!-- ======== Page title ============ -->
        <title>Starpact - Fast Food Restaurant HTML Template</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ url('/')}}/assets/img/logo/favicon.ico">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ url('/')}}/assets/css/bootstrap.min.css">
        <!--<< Font Awesome.css >>-->
        <link rel="stylesheet" href="{{ url('/')}}/assets/css/font-awesome.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ url('/')}}/assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ url('/')}}/assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ url('/')}}/assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ url('/')}}/assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ url('/')}}/assets/css/nice-select.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ url('/')}}/assets/css/main.css">
        <!--<< Style.css >>-->
        <link rel="stylesheet" href="{{ url('/')}}/assets/css/sp-style.css">
    </head>
    <body>
        <!-- Proloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading">
                    C
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                    U
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                    R
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                    R
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                    Y
                    </span>
                    <span data-text-preloader="G" class="letters-loading">
                    G
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                    U
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                    Y
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                    S
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a >
                                <img src="{{ url('/')}}/assets/img/logo/logo.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-lg-block">
                            This involves interactions between a business and its customers. It's about meeting customers' needs and resolving their problems. Effective customer service is crucial.
                        </p>
                        <div class="offcanvas-gallery-area d-none d-lg-block">
                            <div class="offcanvas-gallery-items">
                                <a href="{{ url('/')}}/assets/img/header/01.jpg" class="offcanvas-image img-popup">
                                <img src="{{ url('/')}}/assets/img/header/01.jpg" alt="gallery-img">
                                </a>
                                <a href="{{ url('/')}}/assets/img/header/02.jpg" class="offcanvas-image img-popup">
                                <img src="{{ url('/')}}/assets/img/header/02.jpg" alt="gallery-img">
                                </a>
                                <a href="{{ url('/')}}/assets/img/header/03.jpg" class="offcanvas-image img-popup">
                                <img src="{{ url('/')}}/assets/img/header/03.jpg" alt="gallery-img">
                                </a>
                            </div>
                            <div class="offcanvas-gallery-items">
                                <a href="{{ url('/')}}/assets/img/header/04.jpg" class="offcanvas-image img-popup">
                                <img src="{{ url('/')}}/assets/img/header/04.jpg" alt="gallery-img">
                                </a>
                                <a href="{{ url('/')}}/assets/img/header/05.jpg" class="offcanvas-image img-popup">
                                <img src="{{ url('/')}}/assets/img/header/05.jpg" alt="gallery-img">
                                </a>
                                <a href="{{ url('/')}}/assets/img/header/06.jpg" class="offcanvas-image img-popup">
                                <img src="{{ url('/')}}/assets/img/header/06.jpg" alt="gallery-img">
                                </a>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+013-003-003-9993"><span class="mailto:info@enofik.com">info@Starpact.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a  class="theme-btn">
                                <span class="button-content-wrapper d-flex align-items-center justify-content-center">
                                <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                <span class="button-text">order now</span>
                                </span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        
        <!-- Header Area Start -->
        <header id="header-sticky" class="header-4">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo-left">
                            <a  class="logo-1">
                                <img src="{{ url('/') }}/assets/img/logo/logo-2.png" class="logo-img" alt="logo-img">
                            </a>
                            <a  class="logo-2">
                                <img src="{{ url('/')}}/assets/img/logo/logo.png" class="logo-img" alt="logo-img">
                            </a>
                        </div>
                        <div class="header-left">
                            <div class="mean__menu-wrapper d-none d-lg-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active">
                                                <a >Home</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a >Shop</a>
                                            </li>
                                            <li>
                                                <a >Blog
                                                <i class="fas fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a >Blog</a></li>
                                                    <li><a >Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a >Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- for wp -->
                                </div>
                            </div>
                        </div>
                        <div class="logo">
                            <a  class="header-logo">
                                <img src="{{ url('/')}}/assets/img/logo/logo-2.png" class="logo-img" alt="logo-img">
                            </a>
                            <a  class="header-logo-2">
                                <img src="{{ url('/')}}/assets/img/logo/logo.png" class="logo-img" alt="logo-img">
                            </a>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="menu-cart">
                                <div class="cart-box">
                                    <ul>
                                        <li>
                                            <img src="{{ url('/')}}/assets/img/shop-food/s2.png" alt="image">
                                            <div class="cart-product">
                                                <a href="#0">grilled chiken</a>
                                                <span>168$</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="border-none">
                                            <img src="{{ url('/')}}/assets/img/shop-food/s3.png" alt="image">
                                            <div class="cart-product">
                                                <a href="#0">grilled chiken</a>
                                                <span>168$</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-items d-flex align-items-center justify-content-between">
                                        <span>Shopping : $20.00</span>
                                        <span>Total : $168.00</span>
                                    </div>
                                    <div class="cart-button d-flex justify-content-between mb-4">
                                        <a  class="theme-btn">
                                        View Cart
                                        </a>
                                        <a  class="theme-btn bg-red-2">
                                        Checkout
                                        </a>
                                    </div>
                                </div>
                                <a  class="cart-icon">
                                <i class="far fa-shopping-basket"></i>
                                </a>
                            </div>
                            <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <div class="header-bar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Hero Section Start -->
        <section class="hero-section-3">
            <div class="array-button">
                <button class="array-next"><i class="far fa-long-arrow-right"></i></button>
                <button class="array-prev"><i class="far fa-long-arrow-left"></i></button>
            </div>
        <div class="swiper hero-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-3 style-2 bg-cover" style="background-image: url('assets/img/hero/hero-bg-3.jpg');">
                        <div class="frame-shape" data-animation="fadeInUp" data-delay="2s">
                            <img src="{{ url('/')}}/assets/img/hero/frame.png" alt="shape-img">
                        </div>
                        <div class="frame-shape-2" data-animation="fadeInUp" data-delay="2.2s">
                            <img src="{{ url('/')}}/assets/img/hero/frame-2.png" alt="shape-img">
                        </div>
                        <div class="frame-shape-3">
                            <img src="{{ url('/')}}/assets/img/hero/frame-3.png" alt="shape-img" data-animation="fadeInUp" data-delay="2.4s">
                        </div>
                        <div class="frame-shape-4" data-animation="fadeInUp" data-delay="2.6s">
                            <img src="{{ url('/')}}/assets/img/hero/frame-4.png" alt="shape-img">
                        </div>
                        <div class="frame-shape-5" data-animation="fadeInUp" data-delay="2.8s">
                            <img src="{{ url('/')}}/assets/img/hero/frame-5.png" alt="shape-img">
                        </div>
                        <div class="frame-shape-6" data-animation="fadeInUp" data-delay="2.9s">
                            <img src="{{ url('/')}}/assets/img/hero/frame-6.png" alt="shape-img">
                        </div>
                        <div class="container-fluid">
                            <div class="row g-4 align-items-center justify-content-between">
                                <div class="col-xl-3 col-lg-5">
                                    <div class="hero-content">
                                        <h1  data-animation="fadeInUp" data-delay=".4s">
                                            The Best Pizza Place In Town
                                        </h1>
                                        <div class="hero-button">
                                            <a  class="theme-btn bg-yellow border-radius-none" data-animation="fadeInUp" data-delay="1s">
                                            <span class="button-content-wrapper d-flex align-items-center">
                                            <span class="button-text">order now</span>
                                            <i class="flaticon-delivery"></i>
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-7">
                                    <div class="pizza-image" data-animation="fadeInUp" data-delay="1.4s">
                                        <img src="{{ url('/')}}/assets/img/hero/pizza.png" alt="pizza-img">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-5">
                                    <div class="hero-content-2">
                                        <h2  data-animation="fadeInUp" data-delay=".4s">
                                            Romana
                                        </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">
                                            It's the perfect dining experience where every dish is crafted with fresh, high-quality
                                            Experience quick and efficient service that ensures your food.
                                        </p>
                                        <h4 data-animation="fadeInUp" data-delay=".6s">
                                          $270.00
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- Catagory Pizza Product Section Start -->
        <section class="catagory-pizza-product-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">PIZZA SHOP</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        UNLEASH YOUR INNER FOODIE WITH <br> OUR DELICIOUS PIZZAS
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="catagory-product-card-3">
                            <div class="catagory-image">
                                <img src="{{ url('/')}}/assets/img/home-4/pizza/pizza-1.png" alt="img">
                                <ul class="product-icon d-flex justify-content-center align-items-center">
                                    <li>
                                        <a ><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a >
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a ><i class="far fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="catagory-content">
                                <h4><a >Shrimp pizza</a></h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <div class="price">
                                    <del>$130.00</del>
                                    <span>$120.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="catagory-product-card-3">
                            <div class="catagory-image">
                                <img src="{{ url('/')}}/assets/img/home-4/pizza/pizza-2.png" alt="img">
                                <ul class="product-icon d-flex justify-content-center align-items-center">
                                    <li>
                                        <a ><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a >
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a ><i class="far fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="catagory-content">
                                <h4><a >Seafood pizza</a></h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <div class="price">
                                    <del>$110.00</del>
                                    <span>$105.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="catagory-product-card-3">
                            <div class="catagory-image">
                                <img src="{{ url('/')}}/assets/img/home-4/pizza/pizza-3.png" alt="img">
                                <ul class="product-icon d-flex justify-content-center align-items-center">
                                    <li>
                                        <a ><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a >
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a ><i class="far fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="catagory-content">
                                <h4><a >Cheese pizza</a></h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <div class="price">
                                    <del>$150.00</del>
                                    <span>$140.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="catagory-product-card-3">
                            <div class="catagory-image">
                                <img src="{{ url('/')}}/assets/img/home-4/pizza/pizza-4.png" alt="img">
                                <ul class="product-icon d-flex justify-content-center align-items-center">
                                    <li>
                                        <a ><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a >
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a ><i class="far fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="catagory-content">
                                <h4><a >Glute-Free Pizza</a></h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <div class="price">
                                    <del>$140.00</del>
                                    <span>$130.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-button text-center mt-5 wow fadeInUp" data-wow-delay=".4s">
                    <a  class="theme-btn">
                        <span class="button-content-wrapper d-flex align-items-center">
                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                        <span class="button-text">more pizza</span>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- About Section Start -->
        <section class="about-section fix section-padding pt-0">
            <div class="pizza-shape">
                <img src="{{ url('/')}}/assets/img/shape/pizza-shape.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="about-wrapper-3">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Our Story</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        The Pizzon Has Excellent Of Quality
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    It's the perfect dining experience where every dish is crafted with fresh high-quality dining experience
                                    Experience quick and efficient service that ensures your food is servead fresh It's the where every
                                    dining experience where every dish is crafted with fresh, high-quality ingredients  fresh, high-quality
                                </p>
                                <ul class="list wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <i class="fas fa-check"></i> every
                                        dining experience where every dish
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i> food is servead fresh
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i> every dish is crafted with fresh high-quality
                                    </li>
                                </ul>
                                <a  class="theme-btn wow fadeInUp" data-wow-delay=".5s">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="about-image">
                                <img src="{{ url('/')}}/assets/img/home-4/our-story.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Video Section Start -->
        <div class="cta-video-section fix section-padding bg-cover" style="background-image: url('assets/img/home-4/cta-video-1.jpg');">
            <div class="container">
                <div class="cta-video-items">
                    <a class="video-popup" href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I">Play</a>
                </div>
            </div>
        </div>

        <!-- Food Menu Section Start -->
        <section class="fooder-menu-section fix section-padding pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">
                        WE OFFER</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">WELCOME TO OUR PIZZERIA</h2>
                </div>
                <div class="fooder-menu-wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4><a >BUFFALO CHICKEN PIZZA</a></h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4><a >CHICKEN ALFREDO PIZZA</a></h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="food-menu-items active d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4><a >SMOKED SAUSAGE PIZZA</a></h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4><a >CLASSIC PEPPERONI PIZZA</a></h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4><a >CALIFORNIA STYLE PIZZA</a></h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4><a >HAWAIIAN PINEAPPLE PIZZA</a></h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4><a >Chicago Deep Pizza.</a></h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4><a >Chicago Deep Pizza.</a></h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section fix section-padding">
            <div class="testimonial-wrapper-5 bg-cover" style="background-image: url('assets/img/bg-image/bg-shape.png');">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <div class="swiper testimonial-slider-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-items">
                                        <div class="icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <p>
                                            “Thank you for dinner last night. It was amazing!! I have
                                            say it’s the best meal I have had in quite some time.
                                            will definitely be seeing more eating next year.”
                                        </p>
                                        <div class="client-info">
                                            <h3>Shikhon Islam</h3>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-items">
                                        <div class="icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <p>
                                            “Thank you for dinner last night. It was amazing!! I have
                                            say it’s the best meal I have had in quite some time.
                                            will definitely be seeing more eating next year.”
                                        </p>
                                        <div class="client-info">
                                            <h3>Shikhon Islam</h3>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-items">
                                        <div class="icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <p>
                                            “Thank you for dinner last night. It was amazing!! I have
                                            say it’s the best meal I have had in quite some time.
                                            will definitely be seeing more eating next year.”
                                        </p>
                                        <div class="client-info">
                                            <h3>Shikhon Islam</h3>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-items">
                                        <div class="icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <p>
                                            “Thank you for dinner last night. It was amazing!! I have
                                            say it’s the best meal I have had in quite some time.
                                            will definitely be seeing more eating next year.”
                                        </p>
                                        <div class="client-info">
                                            <h3>Shikhon Islam</h3>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-dot text-center">
                                <div class="dot"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="testimoniam-image bg-cover" style="background-image: url('assets/img/home-4/testimonial.jpg');"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section Start -->
        <section class="news-section fix section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Blog And News</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Our Latest News</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-box-items">
                            <div class="news-image">
                                <img src="{{ url('/')}}/assets/img/home-4/news/01.jpg" alt="img">
                                <div class="post-date">
                                    <h3>24</h3>
                                    <p>NOV</p>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        October 19, 2024
                                    </li>
                                    <li>
                                        <i class="far fa-user"></i>
                                        By admin
                                    </li>
                                </ul>
                                <h4>
                                    <a >How to keep fear from ruining your art business with confident</a>
                                </h4>
                                <p>
                                    It's the perfect dining experience where every dish is crafted with fresh, high-quality
                                    Experience quick and efficient service that ensures your food is servead fresh It's the
                                    dining experience where every dish is crafted with fresh, high-quality ingredients
                                </p>
                                <a  class="link-btn mt-3">Read More <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="news-area-2">
                            <div class="news-box-items-2 wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-img bg-cover" style="background-image: url('assets/img/home-4/news/02.jpg');">
                                    <div class="post-date">
                                        <h3>24</h3>
                                        <p>NOV</p>
                                    </div>
                                </div>
                                <div class="news-content">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            October 19, 2024
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            By admin
                                        </li>
                                    </ul>
                                    <h4><a >How to keep fear from ruining your art business with confident</a></h4>
                                    <p>Corporate businesses typically offerings <br> services such as man or consultin</p>
                                    <a  class="link-btn color-2 mt-3">Read More <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="news-box-items-2 wow fadeInUp" data-wow-delay=".5s">
                                <div class="news-img bg-cover" style="background-image: url('assets/img/home-4/news/03.jpg');">
                                    <div class="post-date">
                                        <h3>24</h3>
                                        <p>NOV</p>
                                    </div>
                                </div>
                                <div class="news-content">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            October 19, 2024
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            By admin
                                        </li>
                                    </ul>
                                    <h4><a >The Ultimate Guide to Crafting the Perfect Homemade Pizza Dough</a></h4>
                                    <p>Corporate businesses typically offerings <br> services such as man or consultin</p>
                                    <a  class="link-btn color-2 mt-3">Read More <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="news-box-items-2 wow fadeInUp" data-wow-delay=".7s">
                                <div class="news-img bg-cover" style="background-image: url('assets/img/home-4/news/04.jpg');">
                                    <div class="post-date">
                                        <h3>24</h3>
                                        <p>NOV</p>
                                    </div>
                                </div>
                                <div class="news-content">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            October 19, 2024
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            By admin
                                        </li>
                                    </ul>
                                    <h4><a >PIZZA NIGHT: HOW TO HOST A FUN AND DELICIOUS PIZZA PARTY</a></h4>
                                    <p>Corporate businesses typically offerings <br> services such as man or consultin</p>
                                    <a  class="link-btn color-2 mt-3">Read More <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Count Section Start -->
        <section class="count-area section-padding pt-0">
            <div class="container">
                <div class="count-wrapper">
                    <div class="count-items wow fadeInUp" data-wow-delay=".2s">
                        <p>Dishes</p>
                        <div class="count-title">
                            <h2><span class="count">91</span></h2>
                        </div>
                    </div>
                    <div class="count-items wow fadeInUp" data-wow-delay=".4s">
                        <p>Locations</p>
                        <div class="count-title">
                            <h2><span class="count">59</span></h2>
                        </div>
                    </div>
                    <div class="count-items wow fadeInUp" data-wow-delay=".6s">
                        <p>Chefs</p>
                        <div class="count-title">
                            <h2><span class="count">12</span></h2>
                        </div>
                    </div>
                    <div class="count-items wow fadeInUp" data-wow-delay=".8s">
                        <p>Cities</p>
                        <div class="count-title">
                            <h2><span class="count">20</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Contact Us Start -->
        <section class="footer-contact-us">
            <div class="footer-contact-us-wrapper">
                <div class="bg-shape">
                   <img src="{{ url('/')}}/assets/img/bg-image/bg-shape.png" alt="shape-img">
                </div>
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <div class="footer-contact-items">
                            <span>Call Us</span>
                            <h3><a href="tel:+1718-904-4450">+1718-904-4450</a></h3>
                            <div class="contact-info-items-2">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Mail Adress</h4>
                                    <p>
                                        email@example.com <br>
                                        info@yourdomain.com
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info-items-2">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>address line</h4>
                                    <p>
                                        Bowery St, New York, 37 USA <br>
                                        NY 10013,USA
                                    </p>
                                </div>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="contact-image">
                                    <img src="{{ url('/')}}/assets/img/home-4/contact/01.jpg" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-image">
                                    <img src="{{ url('/')}}/assets/img/home-4/contact/02.jpg" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-image">
                                    <img src="{{ url('/')}}/assets/img/home-4/contact/03.jpg" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-image">
                                    <img src="{{ url('/')}}/assets/img/home-4/contact/04.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section Start -->
        <div class="google-map-wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!-- Footer Section Start -->
        <footer class="footer-section fix">
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft" data-wow-delay=".3s">
                            © Copyright <span class="theme-color-3">2024</span> <a href="www..com">Starpact </a>. All Rights Reserved.
                        </p>
                        <div class="card-image wow fadeInRight" data-wow-delay=".5s">
                            <img src="{{ url('/')}}/assets/img/card.png" alt="card-img">
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Back To Top Start -->
        <div class="scroll-up">
            <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!--<< All JS Plugins >>-->
        <script src="{{ url('/')}}/assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ url('/')}}/assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ url('/')}}/assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ url('/')}}/assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ url('/')}}/assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ url('/')}}/assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ url('/')}}/assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ url('/')}}/assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ url('/')}}/assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< GSAP Animation Js >>-->
        <script src="{{ url('/')}}/assets/js/animation.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ url('/')}}/assets/js/wow.min.js"></script>
        <!--<< Main.js >>-->
        <script src="{{ url('/')}}/assets/js/main.js"></script>
    </body>
</html>
