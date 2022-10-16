<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SmartMart Motors - Online cars Auctoning System</title>
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-ffit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main-style.css">
</head>

<body>
    
    <!-- tt-mobile menu -->
    <nav class="panel-menu" id="mobile-menu">
        <!--for rtl add class mm-right-->
        <ul>

        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <header id="tt-header" class="tt-on-top tt-header-01">
        <!-- quickLinks -->
        <div class="tt-quickLinks-popup">
        </div>
        <div class="tt-mobile-quickLinks">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col">
                        <a class="btn-toggle" href="#"><i class="icon-149984"></i></a>
                        <div class="quickLinks-layout">
                            <div class="quickLinks-map">
                                <address>
                                    <i class="icon-149984"></i>3261 Anmoore Road, Brooklyn, NY 11230
                                </address>
                                <div id="googleMapHeader" class="google-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <a class="btn-toggle" href="#"><i class="icon-15874"></i></a>
                        <div class="quickLinks-layout">
                            <div class="quickLinks-address">
                                <h6 class="tt-title">Call Us:</h6>
                                <ul>
                                    <li>
                                        <a href="#"><i class="icon-15874"></i> +254794107848</a>
                                    </li>
                                    <li>
                                        <i class="icon-icon"></i> 9:00 AM – 8:00 PM
                                    </li>
                                    <li>
                                        <a href="mailto:info@youremal.com"><i class="icon-mail"></i>
                                            stacycars@youremail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <a data-toggle="modal" data-target="#modalAddYourItem" class="btn-toggle no-popup"
                            href="#"><i class="icon-addcar"></i></a>
                    </div>
                    <div class="col tt-account">
                        <a class="btn-toggle is-popup tt-account" href="#">
                            <i class="icon-user"></i>
                        </a>
                        <div class="tt-dropdown-menu">
                            <div class="tt-row-close">
                                <a href="#" class="tt-btn-close icon-close"></a>
                            </div>
                            <ul>
                                <li><a href="{{ url('user/dashboard') }}">Account</a></li>

                                <li><a href="{{ route('login') }}">Sign In</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col tt-searcher">
                        <a class="btn-toggle is-popup tt-searcher" href="#">
                            <i class="icon-musica-searcher"></i>
                        </a>
                        <div class="tt-dropdown-menu">
                            <div class="container">
                                <form>
                                    <div class="tt-row-search">
                                        <input type="text" class="tt-search-input"
                                            placeholder="Type your search request...">
                                        <button class="tt-btn-search" type="submit"></button>
                                        <button class="tt-btn-close icon-g-80"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-holder">
            <div class="container">
                <div class="row">
                    <!--logo-->
                    <div class="col-logo">
                        <a class="tt-logo" href="{{ url('/') }}">
                            <img class="tt-logo-light svg-img" src="images/logo.svg" alt="">
                            <img class="tt-logo-dark svg-img" src="images/logo-dark.svg" alt="">
                        </a>
                    </div>
                    <!--desctope-menu-->
                    <div class="col-menu col-auto mr-auto ">
                        <div class="tt-desctop-menu" id="tt-desctop-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">HOME</a>

                                    </li>

                                    <li>
                                        <a href="{{ url('all-cars') }}">ALL CARS</a>

                                    </li>


                                    <li><a href="{{ url('contact-us') }}">CONTACT US</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--btn toggle modal-->
                    <div class="col-btn-toggle-modal col-auto">
                        <a class="btn btn-toggle-modal" href="{{ route('login') }}"><i class="icon-addcar"></i><span
                                class="	tt-text">My Account</span>
                        </a>
                    </div>
                    <!--btn toggle mobile menu-->
                    <div class="col-menu-toggle col-auto">
                        <a href="#" class="tt-menu-toggle icon-menu"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- stuck nav -->
        <div id="tt-stuck">
            <div class="container">
                <div class="tt-stuck-row">

                </div>
            </div>
        </div>
    </header>
    <div id="tt-pageContent">
        <div class="container-indent no-margin">
            <div class="mainSlider-layout">
                <div class="loading-content">
                    <div class="loading-dots">
                        <i></i>
                        <i></i>
                        <i></i>
                        <i></i>
                    </div>
                </div>
                <div class="mainSlider">
                    <div class="slide">
                        <div class="img--holder" data-bg="images/slider/slide5.jpg"></div>
                        <div class="slide-content">
                            <div class="container" data-animation="fadeInUpSm" data-animation-delay="0s">
                                <a href="inventory.html" class="tt-caption-custom">
                                    <div class="tt-title">
                                        <div class="text-small">We Don't Sell Cars</div>
                                        <div class="text-large">We Sell<br>a DREAM</div>
                                    </div>
                                    <span><i class="icon-handsshake"></i>Get Approved</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img--holder" data-bg="images/slider/slide5.jpg"></div>

                    </div>
                </div>
            </div>
        </div>
   @yield('content')
    </div>

    <a href="#" id="ttBackToTop" class="tt-back-to-top">BACK TO TOP</a>


    <script src="external/jquery/jquery.min.js"></script>
    <script src="external/bootstrap/js/bootstrap.min.js"></script>
    <script src="external/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="external/slick/slick.min.js"></script>
    <script src="external/panelmenu/panelmenu.js"></script>
    <script src="external/isotope/imagesloaded.js"></script>
    <script src="external/isotope/isotope.pkgd.min.js"></script>
    <script src="external/sumoselect/jquery.sumoselect.min.js"></script>
    <script src="external/countdown/jquery.countto.js"></script>
    <script src="external/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/main.js"></script>
    <!-- form validation and sending to mail -->
    <script src="external/form/jquery.form.js"></script>
    <script src="external/form/jquery.validate.min.js"></script>
    <script src="external/form/jquery.form-init.js"></script>
</body>

</html>
