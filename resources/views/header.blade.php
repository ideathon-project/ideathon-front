<!DOCTYPE html>
<html lang="tr">
<head>

    <meta charset="UTF-8">
    <title>
     Ideathon Academy - {{$title}}
    </title>
   <meta name="keywords" content="{{$keywords}}">
    <meta name="description" content="Ideathon Academy - {{$description}}">
    <meta property="og:site_name" content="Ideathon Academy - {{$title}}">
    <meta property="og:url" content="https://ideathon.academy">
    <meta property="og:description" content="Ideathon Academy - {{$description}}"/>
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ideathon Academy - {{$title}}">
    <meta name='og:image' content="{{$image}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#913BFF">
    <meta name="msapplication-navbutton-color" content="#913BFF">
    <meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">


    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="vendor/html5shiv.js"></script>
    <script src="vendor/respond.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-page-wrapper">
    <!-- ===================================================
        Loading Transition
    ==================================================== -->
    <section>
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="icon"><img src="images/logo.png" alt="" class="m-auto d-block" width="308"></div>
                    <div class="txt-loading mt-2">
								<span data-text-preloader="I" class="letters-loading">
									I
								</span>
                        <span data-text-preloader="D" class="letters-loading">
									D
								</span>
                        <span data-text-preloader="E" class="letters-loading">
									E
								</span>
                        <span data-text-preloader="A" class="letters-loading">
									A
								</span>
                        <span data-text-preloader="T" class="letters-loading">
									T
								</span>
                        <span data-text-preloader="H" class="letters-loading">
									H
								</span>
                        <span data-text-preloader="O" class="letters-loading">
									O
								</span>
                        <span data-text-preloader="N" class="letters-loading">
									N
								</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--
    =============================================
        Search
    ==============================================
    -->



    <!--
    =============================================
        Theme Main Menu
    ==============================================
    -->
    <header class="theme-main-menu sticky-menu theme-menu-four">
        <!--<div class="inner-content">
            <div class="d-flex align-items-center">

                <div class="right-widget d-flex align-items-center ms-auto order-lg-3">
                    <div class="call-button d-none d-xl-block me-5">Call us <a href="#">(+880) 321 782 110</a></div>
                    <button class="menu-search-btn tran3s" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="bi bi-search"></i></button>
                    <a href="contact-us.html" class="send-msg-btn tran3s d-none d-lg-block">Send us Message</a>
                </div>-->
        <div class="inner-content">
            <div class="d-flex align-items-center">
                <div class="logo order-lg-0"><a href="#" class="d-block"><img src="logo.png" alt="" width="250px"></a></div>
                <nav class="navbar navbar-expand-lg order-lg-2">
            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="d-block d-lg-none"><div class="logo"><a href="/"><img src="https://beta.ideathon.academy/logo.png" alt="" width="130"></a></div></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" role="button">Ana Sayfa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/hakkimizda" role="button" data-bs-auto-close="outside" aria-expanded="false">Hakkımızda</a>
                        <!--<ul class="dropdown-menu">
                            <li class="dropdown-submenu dropdown">
                                <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="about-us1.html"><span>Hakkımızda</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-us1.html" class="dropdown-item"><span>About Us One</span></a></li>
                                    <li><a href="about-us2.html" class="dropdown-item"><span>About Us Two</span></a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropdown">
                                <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Services</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="service-V1.html" class="dropdown-item"><span>Service One</span></a></li>
                                    <li><a href="service-V2.html" class="dropdown-item"><span>Service Two</span></a></li>
                                    <li><a href="service-details-V1.html" class="dropdown-item"><span>Service Details</span></a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropdown">
                                <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Our Team</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="team.html" class="dropdown-item"><span>Team Member</span></a></li>
                                    <li><a href="team-details.html" class="dropdown-item"><span>Team Details</span></a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropdown">
                                <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="faq.html" class="dropdown-item"><span>Faq</span></a></li>
                                    <li><a href="signin.html" class="dropdown-item"><span>Signin</span></a></li>
                                    <li><a href="sign-up.html" class="dropdown-item"><span>Signup</span></a></li>
                                    <li><a href="404.html" class="dropdown-item"><span>404 Error</span></a></li>
                                </ul>
                            </li>
                            <li><a href="testimonial.html" class="dropdown-item"><span>Testimonials</span></a></li>
                            <li><a href="pricing.html" class="dropdown-item"><span>Our Pricing</span></a></li>
                        </ul>
                    </li>-->
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Portfolio</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-V1.html" class="dropdown-item"><span>Portfolio 3 Column</span></a></li>
                                <li><a href="portfolio-V2.html" class="dropdown-item"><span>Portfolio 2 Column</span></a></li>
                                <li><a href="portfolio-V3.html" class="dropdown-item"><span>Portfolio Masonry</span></a></li>
                                <li><a href="portfolio-details-V1.html" class="dropdown-item"><span>Single Portfolio</span></a></li>
                            </ul>
                        </li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/blog" role="button"  data-bs-auto-close="outside" aria-expanded="false">Blog</a>
                        <!--<ul class="dropdown-menu">
                            <li><a href="blog-V1.html" class="dropdown-item"><span>Grid Layout</span></a></li>
                            <li><a href="blog-V2.html" class="dropdown-item"><span>Grid With Sidebar</span></a></li>
                            <li><a href="blog-V3.html" class="dropdown-item"><span>Blog Masonary</span></a></li>
                            <li><a href="blog-V4.html" class="dropdown-item"><span>Blog Standard</span></a></li>
                            <li><a href="blog-details.html" class="dropdown-item"><span>Blog Details</span></a></li>
                        </ul>-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/iletisim" role="button">İletişim</a>
                    </li>
                </ul>
                <!-- Mobile Content -->
                <!--<div class="mobile-content d-block d-lg-none">
                    <div class="d-flex flex-column align-items-center justify-content-center mt-70">
                        <a href="contact-us.html" class="send-msg-btn tran3s mb-10">Send us Message</a>
                        <div class="call-button">Call us <a href="#">(+880) 321 7852 110</a></div>
                    </div>
                </div>--> <!-- /.mobile-content -->
            </div>
        </nav>
            </div></div>
</header>

</div>
