<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarLeader - Online cars Auctoning System</title>
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-ffit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="tt-colorswatch">
        <div class="tt-colorswatch-options">
            <a href="#" class="colorswatch1 active js-swatch-color"></a>
            <a href="#" class="colorswatch2 js-swatch-color" data-color="1"></a>
            <a href="#" class="colorswatch3 js-swatch-color" data-color="2"></a>
            <a href="#" class="colorswatch4 js-swatch-color" data-color="3"></a>
            <a href="#" class="colorswatch5 js-swatch-color" data-color="4"></a>
            <a href="#" class="colorswatch6 js-swatch-color" data-color="5"></a>
        </div>
        <div class="tt-colorswatch-btn js-colorswatch">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="347.523px"
                height="347.523px" viewBox="0 0 347.523 347.523" style="enable-background:new 0 0 347.523 347.523;"
                xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M108.674,196.125c-2.857-0.402-5.777-0.592-8.746-0.534c-14.267,0.278-36.342,6.092-60.493,32.207
						c-19.171,20.729-19.954,42.635-20.644,61.961c-0.66,18.474-1.181,33.065-16.507,43.727c-1.506,1.049-2.318,2.837-2.113,4.661
						c0.128,1.147,0.645,2.191,1.434,2.98c0.466,0.466,1.026,0.843,1.658,1.099c28.523,11.553,77.316,5.895,117.044-33.833
						c18.043-18.044,28.812-37.145,31.14-55.233c0.607-4.719,0.618-9.323,0.091-13.763L108.674,196.125z M100.915,229.382
						c-1.553,2.174-3.859,3.612-6.494,4.052c-19.209,3.202-25.884,15.953-26.159,16.494c-1.627,3.387-5.167,5.611-8.989,5.611
						c-0.337,0-0.676-0.017-1.015-0.052c-1.149-0.117-2.264-0.432-3.313-0.936c-4.97-2.391-7.069-8.376-4.681-13.347
						c0.442-0.918,11.153-22.546,40.869-27.5c0.546-0.09,1.1-0.136,1.647-0.136c4.908,0,9.055,3.516,9.861,8.357
						C103.08,224.559,102.467,227.207,100.915,229.382z" />
                        <path
                            d="M340.587,6.796c-8.615-8.614-22.425-9.1-31.624-1.112c-5.782,5.021-141.818,123.166-160.166,141.513
						c-9.175,9.175-20.946,24.898-31.124,39.428l42.864,43.271c14.546-10.18,30.345-22.003,39.65-31.308
						C218.749,180.024,336.69,44.193,341.703,38.42C349.688,29.22,349.201,15.41,340.587,6.796z" />
                    </g>
                </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
            </svg>
        </div>
    </div>
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
        <!-- panel-info -->
        <div class="tt-panel-info">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto mr-auto">
                        <ul class="tt-box-info">
                            <li><i class="icon-149984"></i>3261 Anmoore Road, Brooklyn, NRB 11230</li>
                            <li><a href="#"><i class="icon-15874"></i><strong>Call Us:</strong>
                                    +254794107848</a></li>
                            <li><i class="icon-icon"></i>9:00 AM – 8:00 PM</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <div class="tt-language">
                            <div class="tt-skinSelect-02">
                                <select class="tt-select">
                                    <option value="ENG">ENG</option>
                                </select>
                            </div>
                        </div>
                        <div class="tt-dropdown-obj tt-searcher">
                            <a href="#" class="tt-dropdown-toggle">
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
                        <div class="tt-dropdown-obj tt-account">
                            <a href="#" class="tt-dropdown-toggle">
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
                        <div class="tt-dropdown-obj tt-compare compare-toggle">
                            <a href="#" class="tt-dropdown-toggle">
                                <i class="icon-compare"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- header-holder -->
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
                                    <li class="is-subMenu">
                                        <a href="#">ABOUT US</a>

                                    </li>
                                    <li>
                                        <a href="#">SERVICES</a>

                                    </li>


                                    <li><a href="#">CARS</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">CONTACTS</a></li>
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
                        <div class="img--holder" data-bg="images/slider/slide-01.jpg"></div>
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
                        <div class="img--holder" data-bg="images/slider/slide-02.jpg"></div>
                        <div class="slide-content">
                            <div class="container" data-animation="fadeInUpSm" data-animation-delay="0s">
                                <div class="tp-caption-01-01">Shop Cars for Sale</div>
                                <div class="tp-caption-01-02">HUGE DISCOUNTS<br>up to <span
                                        class="tt-default-color">25%</span></div>
                                <div class="tp-caption-01-03">COMPLETE HAPPINESS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent no-margin">
            <div class="container tt-container-fluid-mobile">
                <div class="tt-search-filter">
                    <i class="tt-icon-filter icon-carsearch"></i>
                    <div class="tt-col-title">
                        Find Your<br> Perfect Car
                    </div>
                    <div class="tt-col-select visible-desctope tt-skinSelect-01">
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">NEW</option>
                            <!--placeholder-->
                            <option value="Old">OLD</option>
                        </select>
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">YEAR</option>
                            <!--placeholder-->
                            <option value="1">2014</option>
                            <option value="2">2015</option>
                            <option value="3">2016</option>
                            <option value="4">2017</option>
                            <option value="5">2018</option>
                        </select>
                        <!-- one select -->
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">SELECT A MAKE</option>
                            <!--placeholder-->
                            <option value="KIA">KIA</option>
                            <option value="CHEVROLET">CHEVROLET</option>
                            <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                            <option value="AUDI">AUDI</option>
                            <option value="NISSAN">NISSAN</option>
                            <option value="LEXUS">LEXUS</option>
                            <option value="SUBARU">SUBARU</option>
                            <option value="SUZUKI">SUZUKI</option>
                        </select>
                        <!-- /one select -->
                        <!-- one select -->
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">SELECT A MODEL</option>
                            <!--placeholder-->
                            <option value="SEDAN">SEDAN</option>
                            <option value="HATCHBACK">HATCHBACK</option>
                            <option value="SPORT CARS">SPORT CARS</option>
                            <option value="SUV">SUV</option>
                            <option value="Pickups">PICKUPS</option>
                            <option value="CONVERTIBLE">CONVERTIBLE</option>
                            <option value="COUPE">COUPE</option>
                            <option value="MINIVAN">MINIVAN</option>
                        </select>
                        <!-- /one select -->
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">PRICE</option>
                            <!--placeholder-->
                            <option value="1000$">1000$</option>
                            <option value="5000$">5000$</option>
                            <option value="10000$">10000$</option>
                        </select>
                    </div>
                    <div class="tt-col-select visible-device tt-skinSelect-01">
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">NEW</option>
                            <!--placeholder-->
                            <option value="Old">OLD</option>
                        </select>
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">YEAR</option>
                            <!--placeholder-->
                            <option value="1">2014</option>
                            <option value="2">2015</option>
                            <option value="3">2016</option>
                            <option value="4">2017</option>
                            <option value="5">2018</option>
                        </select>
                        <!-- one select -->
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">MAKE</option>
                            <!--placeholder-->
                            <option value="KIA">KIA</option>
                            <option value="CHEVROLET">CHEVROLET</option>
                            <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                            <option value="AUDI">AUDI</option>
                            <option value="NISSAN">NISSAN</option>
                            <option value="LEXUS">LEXUS</option>
                            <option value="SUBARU">SUBARU</option>
                            <option value="SUZUKI">SUZUKI</option>
                        </select>
                        <!-- /one select -->
                        <!-- one select -->
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">MODEL</option>
                            <!--placeholder-->
                            <option value="SEDAN">SEDAN</option>
                            <option value="HATCHBACK">HATCHBACK</option>
                            <option value="SPORT CARS">SPORT CARS</option>
                            <option value="SUV">SUV</option>
                            <option value="Pickups">PICKUPS</option>
                            <option value="CONVERTIBLE">CONVERTIBLE</option>
                            <option value="COUPE">COUPE</option>
                            <option value="MINIVAN">MINIVAN</option>
                        </select>
                        <!-- /one select -->
                        <select class="tt-select">
                            <option disabled="disabled" selected="selected">PRICE</option>
                            <!--placeholder-->
                            <option value="1000$">1000$</option>
                            <option value="5000$">5000$</option>
                            <option value="10000$">10000$</option>
                        </select>
                        <div class="tt-btn">
                            <a href="#" class="btn tt-icon-left"><i
                                    class="icon-musica-searcher"></i><span>294&nbsp;</span>CARS</a>
                        </div>
                    </div>
                    <div class="tt-col-btn">
                        <a href="#" class="btn tt-icon-left"><i class="icon-musica-searcher"></i><span
                                class="tt-mobile-hide">294&nbsp;</span>CARS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container">
                <div class="tt-block-title">
                    <h1 class="tt-title">Welcome to <span class="tt-defaul-color">Car</span> Leader</h1>
                    <div class="tt-description">The Easiest Way to Find Your Next Car</div>
                </div>
                <div class="tt-text-center ws-short-structure">
                    For 25 years, Car Leader has been raising the standard of used car retailing with one of the most
                    innovative and reliable used vehicle programmes ever created. A comprehensive range of benefits as
                    standard has evolved over time and, today, drivers can
                    leave the forecourt with total reassurance and peace of mind.
                    <span class="tt-hide-block">
                        For used vehicles, we calculate a fair retail price based on a detailed analysis of comparable
                        current and previous car listings in a given market. We call this estimate the Car Leader
                        Instant Market Value.
                    </span>
                </div>
                <div class="ws-short-btn">
                    <a href="#" target="_blank" class="ws-btn-more">READ MORE</a>
                </div>
            </div>
        </div>
        <div class="container-indent-02">
            <div class="container-fluid">
                <div class="tt-block-title">
                    <h3 class="tt-title">Types of Vehicle</h3>
                    <div class="tt-description">NEW &amp; USED CARS FOR SALE</div>
                </div>
                <!--carusel-->
                <div class="js-carousel tt-arrow-center-fluid tt-arrow-color02 slick-alignment-arrows" data-item="5"
                    data-dots="true">
                    <a href="inventory.html" class="tt-media-02">
                        <img src="images/custom/media02-img-01.jpg" alt="">
                        <div class="tt-description">
                            <h5 class="tt-title">Sedan <span class="tt-total">12 <span>Offers</span></span></h5>
                            <span class="tt-link-marker">view cars</span>
                        </div>
                    </a>
                    <a href="inventory.html" class="tt-media-02">
                        <img src="images/custom/media02-img-02.jpg" alt="">
                        <div class="tt-description">
                            <h5 class="tt-title">Hatchback <span class="tt-total">7 <span>Offers</span></span></h5>
                            <span class="tt-link-marker">view cars</span>
                        </div>
                    </a>
                    <a href="inventory.html" class="tt-media-02">
                        <img src="images/custom/media02-img-03.jpg" alt="">
                        <div class="tt-description">
                            <h5 class="tt-title">Sport Cars <span class="tt-total">9 <span>Offers</span></span></h5>
                            <span class="tt-link-marker">view cars</span>
                        </div>
                    </a>
                    <a href="inventory.html" class="tt-media-02">
                        <img src="images/custom/media02-img-04.jpg" alt="">
                        <div class="tt-description">
                            <h5 class="tt-title">SUV <span class="tt-total">25 <span>Offers</span></span></h5>
                            <span class="tt-link-marker">view cars</span>
                        </div>
                    </a>
                    <a href="inventory.html" class="tt-media-02">
                        <img src="images/custom/media02-img-05.jpg" alt="">
                        <div class="tt-description">
                            <h5 class="tt-title">Pickups <span class="tt-total">9 <span>Offers</span></span></h5>
                            <span class="tt-link-marker">view cars</span>
                        </div>
                    </a>
                    <a href="inventory.html" class="tt-media-02">
                        <img src="images/custom/media02-img-06.jpg" alt="">
                        <div class="tt-description">
                            <h5 class="tt-title">Convertible <span class="tt-total">9 <span>Offers</span></span></h5>
                            <span class="tt-link-marker">view cars</span>
                        </div>
                    </a>
                    <a href="inventory.html" class="tt-media-02">
                        <img src="images/custom/media02-img-07.jpg" alt="">
                        <div class="tt-description">
                            <h5 class="tt-title">Coupe <span class="tt-total">11 <span>Offers</span></span></h5>
                            <span class="tt-link-marker">view cars</span>
                        </div>
                    </a>
                    <a href="inventory.html" class="tt-media-02">
                        <img src="images/custom/media02-img-08.jpg" alt="">
                        <div class="tt-description">
                            <h5 class="tt-title">Minivan <span class="tt-total">9 <span>Offers</span></span></h5>
                            <span class="tt-link-marker">view cars</span>
                        </div>
                    </a>
                </div>
                <!--/carusel-->
            </div>
        </div>
        <div class="container-indent">
            <div class="container">
                <div class="tt-block-title">
                    <h3 class="tt-title">Browse By Type</h3>
                    <div class="tt-description">We work with brands</div>
                    <a href="inventory.html" class="tt-link-redirect">SHOW ALL TYPES</a>
                </div>
                <!--carusel-->
                <div class="js-carousel-brand tt-arrow-center slick-alignment-arrows">
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img01.png' alt="">
                        </div>
                        <h6 class="tt-title">KOA (7)</h6>
                    </a>
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img02.png' alt="">
                        </div>
                        <h6 class="tt-title">Levro (10)</h6>
                    </a>
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img03.png' alt="">
                        </div>
                        <h6 class="tt-title">Porserg (25)</h6>
                    </a>
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img04.png' alt="">
                        </div>
                        <h6 class="tt-title">Seretta (13)</h6>
                    </a>
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img05.png' alt="">
                        </div>
                        <h6 class="tt-title">Dossan (21)</h6>
                    </a>
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img06.png' alt="">
                        </div>
                        <h6 class="tt-title">Noex (5)</h6>
                    </a>
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img07.png' alt="">
                        </div>
                        <h6 class="tt-title">Winger (17)</h6>
                    </a>
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img08.png' alt="">
                        </div>
                        <h6 class="tt-title">WMB (6)</h6>
                    </a>
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img09.png' alt="">
                        </div>
                        <h6 class="tt-title">Jeex (6)</h6>
                    </a>
                    <a class="tt-brand" href="inventory.html" target="_blank">
                        <div class="tt-img">
                            <img src='images/custom/brand_img10.png' alt="">
                        </div>
                        <h6 class="tt-title">Auster (6)</h6>
                    </a>
                </div>
                <!--/carusel-->
            </div>
        </div>
        <div class="container-indent">
            <div class="tt-promo-02" data-bg="images/custom/box-parallax02.jpg">
                <div class="container">
                    <div class="tt-block-title">
                        <h3 class="tt-title">We Make It Easy</h3>
                        <div class="tt-description">How It Works</div>
                    </div>
                    <div class="tt-promo-02-layout">
                        <a href="inventory.html" class="tt-item">
                            <div class="box-icon">
                                <div class="tt-line-dotted tt-right"></div>
                                <i class="icon-carsearch2"></i>
                            </div>
                            <h6 class="tt-title">View Our Inventory</h6>
                        </a>
                        <div class="tt-item-smal">
                            <div class="box-icon">
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div>
                        <a href="faq.html" class="tt-item">
                            <div class="box-icon">
                                <div class="tt-line-dotted tt-left"></div>
                                <div class="tt-line-dotted tt-right"></div>
                                <i class="icon-tradein"></i>
                            </div>
                            <h6 class="tt-title">Value Your Trade-In</h6>
                        </a>
                        <div class="tt-item-smal">
                            <div class="box-icon">
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div>
                        <a href="faq.html" class="tt-item">
                            <div class="box-icon">
                                <div class="tt-line-dotted tt-left"></div>
                                <div class="tt-line-dotted tt-right"></div>
                                <i class="icon-financing"></i>
                            </div>
                            <h6 class="tt-title">Get Easy Financing</h6>
                        </a>
                        <div class="tt-item-smal">
                            <div class="box-icon">
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div>
                        <a href="faq.html" class="tt-item">
                            <div class="box-icon">
                                <div class="tt-line-dotted tt-left"></div>
                                <i class="icon-payment"></i>
                            </div>
                            <h6 class="tt-title">Make A Payment</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container">
                <div class="tt-block-title">
                    <h3 class="tt-title">Weekly Specials</h3>
                    <div class="tt-description">Find your perfect car</div>
                </div>
            </div>
            <div class="portfolio-masonry-layout">
                <div class="container hidden-mobile">
                    <a href="inventory.html" class="extra-link">View more cars</a>
                </div>
                <div class="tt-portfolio-masonry">
                    <div class="tt-filter-nav">
                        <div class="button active" data-filter="*">ALL (294)</div>
                        <div class="button" data-filter=".sort-value-01">New (112)</div>
                        <div class="button" data-filter=".sort-value-02">Used (136)</div>
                        <div class="button" data-filter=".sort-value-03">Certified (46)</div>
                    </div>
                    <div class="tt-portfolio-content layout-default">
                        <div class="element-item sort-value-02">
                            <a class="tt-portfolio-item" href="inventory-item02.html">
                                <figure>
                                    <img src="images/gallery/gallery_img01.jpg" alt="">
                                    <figcaption>
                                        <h5 class="tt-title"><span>NEW</span> 2017 Toytoa Cilica</h5>
                                        <span class="tt-price">$24.850</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="element-item sort-value-02">
                            <a class="tt-portfolio-item" href="inventory-item02.html">
                                <figure>
                                    <img src="images/gallery/gallery_img02.jpg" alt="">
                                    <figcaption>
                                        <h5 class="tt-title"><span>NEW</span> 2018 Lehus CP200h</h5>
                                        <span class="tt-price">$30.250</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="element-item sort-value-01">
                            <a class="tt-portfolio-item" href="inventory-item02.html">
                                <figure>
                                    <img src="images/gallery/gallery_img03.jpg" alt="">
                                    <figcaption>
                                        <h5 class="tt-title"><span>NEW</span> 2019 Chrevolet Cruse</h5>
                                        <span class="tt-price">$24.850</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="element-item sort-value-03">
                            <a class="tt-portfolio-item" href="inventory-item02.html">
                                <figure>
                                    <img src="images/gallery/gallery_img04.jpg" alt="">
                                    <figcaption>
                                        <h5 class="tt-title">2019 Toytoa Carella Hatchback</h5>
                                        <span class="tt-price">$37.150</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="element-item element-item-2x sort-value-01">
                            <a class="tt-portfolio-item" href="inventory-item02.html">
                                <figure>
                                    <img src="images/gallery/gallery_img09.jpg" alt="">
                                    <figcaption>
                                        <h5 class="tt-title"><span>NEW</span> 2018 Chawy Traverse Specs</h5>
                                        <span class="tt-price">$44.550</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="element-item sort-value-02">
                            <a class="tt-portfolio-item" href="inventory-item02.html">
                                <figure>
                                    <img src="images/gallery/gallery_img05.jpg" alt="">
                                    <figcaption>
                                        <h5 class="tt-title">2017 Heundu Genesis G90</h5>
                                        <span class="tt-price">$24.000</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="element-item sort-value-02">
                            <a class="tt-portfolio-item" href="inventory-item02.html">
                                <figure>
                                    <img src="images/gallery/gallery_img06.jpg" alt="">
                                    <figcaption>
                                        <h5 class="tt-title">2019 Codallac CT6</h5>
                                        <span class="tt-price">$17.850</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="element-item sort-value-03">
                            <a class="tt-portfolio-item" href="inventory-item02.html">
                                <figure>
                                    <img src="images/gallery/gallery_img07.jpg" alt="">
                                    <figcaption>
                                        <h5 class="tt-title"><span>NEW</span> 2018 Shroda Kopiaq L&K</h5>
                                        <span class="tt-price">$19.250</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="element-item sort-value-01">
                            <a class="tt-portfolio-item" href="inventory-item02.html">
                                <figure>
                                    <img src="images/gallery/gallery_img08.jpg" alt="">
                                    <figcaption>
                                        <h5 class="tt-title">2018 Chrevolet Equinex</h5>
                                        <span class="tt-price">$33.850</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container visible-mobile">
                    <a href="inventory-no-sidebar.html" class="extra-link">View more cars</a>
                </div>
            </div>
        </div>
        <div class="container-indent no-margin">
            <div class="tt-layout01-bg">
                <div class="container">
                    <div class="tt-block-title">
                        <h3 class="tt-title">What We Offer</h3>
                        <div class="tt-description">our featured services</div>
                    </div>
                </div>
                <div class="tt-layout01">
                    <div class="layout01-desctope">
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col-6 col-lg-4">
                                    <div class="tt-item tt-icon-right">
                                        <div class="tt-item-icon">
                                            <i class="icon-car-washing-machine"></i>
                                        </div>
                                        <div class="tt-item-content">
                                            <h6 class="tt-title">Pre-Sale Preparation</h6>
                                            <p>
                                                Before you sell your car, or trade it in to get something bigger or
                                                better, we can help you make your car look as good as possible before
                                                anyone comes to see it.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4  ml-auto">
                                    <div class="tt-item">
                                        <div class="tt-item-icon">
                                            <i class="icon-financing"></i>
                                        </div>
                                        <div class="tt-item-content">
                                            <h6 class="tt-title">Financing</h6>
                                            <p>
                                                Car Leader has formed close relationships with several local and
                                                national lenders, so we're able to offer financing rates that many other
                                                car dealers can't offer.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-6 col-lg-4">
                                    <div class="tt-item tt-icon-right tt-icon-bottom">
                                        <div class="tt-item-icon">
                                            <i class="icon-tradein2"></i>
                                        </div>
                                        <div class="tt-item-content">
                                            <h6 class="tt-title">Trade-In Service</h6>
                                            <p>
                                                Make the most of our simple and hassle-free trade-in program! Our
                                                service allows you to purchase a new car at an attractive price, while
                                                saving you all the trouble of handling your old car.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4  ml-auto">
                                    <div class="tt-item  tt-icon-bottom">
                                        <div class="tt-item-icon">
                                            <i class="icon-testdrive"></i>
                                        </div>
                                        <div class="tt-item-content">
                                            <h6 class="tt-title">Test Drive Any Car </h6>
                                            <p>
                                                We welcome you to stop by and take a look at the pristine inventory we
                                                offer. Most importantly, if you have any questions or concerns, speak to
                                                the seller immediately.<br>
                                                <a class="link-tel" href="#">+01 123 456 78</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="layout01-mobile">
                        <div class="slider-layout">
                            <div class="tt-item">
                                <div class="tt-item-icon">
                                    <i class="icon-car-washing-machine"></i>
                                </div>
                                <div class="tt-item-content">
                                    <h6 class="tt-title">Pre-Sale Preparation</h6>
                                    <p>
                                        Before you sell your car, or trade it in to get something bigger or better, we
                                        can help you make your car look as good as possible before anyone comes to see
                                        it.

                                    </p>
                                </div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-item-icon">
                                    <i class="icon-tradein2"></i>
                                </div>
                                <div class="tt-item-content">
                                    <h6 class="tt-title">Trade-In Service</h6>
                                    <p>
                                        Make the most of our simple and hassle-free trade-in program! Our service allows
                                        you to purchase a new car at an attractive price, while saving you all the
                                        trouble of handling your old car.

                                    </p>
                                </div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-item-icon">
                                    <i class="icon-financing"></i>
                                </div>
                                <div class="tt-item-content">
                                    <h6 class="tt-title">Financing</h6>
                                    <p>
                                        Car Leader has formed close relationships with several local and national
                                        lenders, so we're able to offer financing rates that many other car dealers
                                        can't offer.
                                    </p>
                                </div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-item-icon">
                                    <i class="icon-testdrive"></i>
                                </div>
                                <div class="tt-item-content">
                                    <h6 class="tt-title">Test Drive Any Car</h6>
                                    <p>
                                        We welcome you to stop by and take a look at the pristine inventory we offer.
                                        Most importantly, if you have any questions or concerns, speak to the seller
                                        immediately.
                                        <br>
                                        <a class="link-tel" href="#">+01 123 456 78</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent no-margin">
            <div class="tt-promo-01" data-bg="images/custom/box-promo01.jpg">
                <div class="container">
                    <div class="tt-block-title">
                        <h3 class="tt-title">What Have We Achieved</h3>
                        <div class="tt-description">Real Figures</div>
                    </div>
                    <div class="tt-promo-layout counter-js slider-layout">
                        <div class="tt-item">
                            <div class="box-value">
                                <i class="icon-vehicles"></i>
                                <span><span class="tt-counter" data-from="0" data-to="4567">0</span></span>
                            </div>
                            <h6 class="tt-title">Vehicles In Stock</h6>
                        </div>
                        <div class="tt-item">
                            <div class="box-value">
                                <i class="icon-awards"></i>
                                <span><span class="tt-counter" data-from="0" data-to="254">0</span></span>
                            </div>
                            <h6 class="tt-title">Awards</h6>
                        </div>
                        <div class="tt-item">
                            <div class="box-value">
                                <i class="icon-customers"></i>
                                <span><span class="tt-counter" data-from="0" data-to="100">0</span>%</span>
                            </div>
                            <h6 class="tt-title">Happy Customers</h6>
                        </div>
                        <div class="tt-item">
                            <div class="box-value">
                                <i class="icon-staff"></i>
                                <span><span class="tt-counter" data-from="0" data-to="50">0</span>+</span>
                            </div>
                            <h6 class="tt-title">Qualified Staff</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container">
                <div class="tt-block-title">
                    <h3 class="tt-title">What's New</h3>
                    <div class="tt-description">Read our latest blog posts</div>
                </div>
                <div
                    class="js-carousel-news tt-media-carousel tt-arrow-center slick-alignment-arrows dots-error content-error">
                    <div>
                        <a href="blog-right-column.html" class="tt-media">
                            <div class="tt-img">
                                <img src="images/custom/img_01.jpg" alt="">
                            </div>
                            <div class="tt-layot">
                                <div class="tt-time">
                                    <span>16</span> Apr
                                </div>
                                <h3 class="title">5 of the Most Useful Auto Industry Trends for an Efficient</h3>
                                <p>
                                    Auto industry trends are fleeting. Unless they can enhance the efficiency...
                                </p>
                                <span class="tt-link">read more</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="blog-right-column.html" class="tt-media">
                            <div class="tt-img">
                                <img src="images/custom/img_02.jpg" alt="">
                            </div>
                            <div class="tt-layot">
                                <div class="tt-time">
                                    <span>18</span> Apr
                                </div>
                                <h3 class="title">7 of the Best Car Salesman Tips for New Hires</h3>
                                <p>
                                    These car salesman tips are just what you need to help train new hires...
                                </p>
                                <span class="tt-link">read more</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="blog-right-column.html" class="tt-media">
                            <div class="tt-img">
                                <img src="images/custom/img_03.jpg" alt="">
                            </div>
                            <div class="tt-layot">
                                <div class="tt-time">
                                    <span>25</span> Apr
                                </div>
                                <h3 class="title">How to use a Dealer Swap to Increase Sales</h3>
                                <p>
                                    Are you taking advantage of all that a dealer swap has to offer?
                                </p>
                                <span class="tt-link">read more</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="blog-right-column.html" class="tt-media">
                            <div class="tt-img">
                                <img src="images/custom/img_06.jpg" alt="">
                            </div>
                            <div class="tt-layot">
                                <div class="tt-time">
                                    <span>16</span> Apr
                                </div>
                                <h3 class="title">5 of the Most Useful Auto Industry Trends for an Efficient</h3>
                                <p>
                                    Auto industry trends are fleeting. Unless they can enhance the efficiency...
                                </p>
                                <span class="tt-link">read more</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="box-reviews">
                <div class="container">
                    <div class="tt-block-title">
                        <h3 class="tt-title">Our Testimonials</h3>
                        <div class="tt-description">What our happy clients say about us</div>
                    </div>
                    <div class="tt-reviews-carousel js-reviews-carousel tt-arrow-center slick-alignment-arrows"
                        data-dots="true">
                        <div class="tt-reviews-content">
                            <div class="box-show-rating">
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            Great treatment right form the get go. Was looking at a car that had just arrived on the lot
                            so it wasn't immediately available for a test drive and didn't have a price yet, but my
                            salesman, kept me fully apprised of the situation. Offered a refundable
                            deposit until I could test drive it and make a decision. Great car, great sales team.
                            <p class="tt-title">
                                Charles M. Worsham, <span>Toyota C-HR Eclipse</span>
                            </p>
                        </div>
                        <div class="tt-reviews-content">
                            <div class="box-show-rating">
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            Great treatment right form the get go. Was looking at a car that had just arrived on the lot
                            so it wasn't immediately available for a test drive and didn't have a price yet, but my
                            salesman, kept me fully apprised of the situation. Offered a refundable
                            deposit until I could test drive it and make a decision. Great car, great sales team.
                            <p class="tt-title">
                                Charles M. Worsham, <span>Toyota C-HR Eclipse</span>
                            </p>
                        </div>
                        <div class="tt-reviews-content">
                            <div class="box-show-rating">
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            Great treatment right form the get go. Was looking at a car that had just arrived on the lot
                            so it wasn't immediately available for a test drive and didn't have a price yet, but my
                            salesman, kept me fully apprised of the situation. Offered a refundable
                            deposit until I could test drive it and make a decision. Great car, great sales team.
                            <p class="tt-title">
                                Charles M. Worsham, <span>Toyota C-HR Eclipse</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box-reviews-img">
                    <div class="slide-img01 tt-show"><img src="images/custom/parallax01-img01.png" alt="">
                    </div>
                    <div class="slide-img02"><img src="images/custom/parallax01-img02.png" alt=""></div>
                    <div class="slide-img03"><img src="images/custom/parallax01-img03.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container">
                <div class="tt-block-title tt-title-custom">
                    <h3 class="tt-title">Sell Your Car Quickly and Easily with Us</h3>
                    <div class="tt-description">It was really easy to sell your car!</div>
                </div>
                <div class="text-center tt-indent-btn">
                    <a href="#" class="btn" data-toggle="modal" data-target="#modalAddYourItem">SUBMIT YOUR
                        VEHICLE NOW</a>
                </div>
            </div>
        </div>
        <div class="container-indent container-indent-03 tt-mobile-hidden">
            <div class="tt-map">
                <a href="#" class="tt-btn-toggle"></a>
                <div class="tt-box-map">
                    <div id="googleMapFooter" class="google-map"></div>
                </div>
            </div>
        </div>
    </div>
    <footer id="tt-footer">
        <div class="tt-footer-layout">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="tt-footer-menu">

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col col-auto">
                        <a class="tt-logo" href="index.html">
                            <img class="tt-logo-dark svg-img" src="images/logo.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="tt-row-custom">
                    <div class="tt-col">
                        <ul class="tt-list-info">
                            <li>
                                <i class="icon-149984"></i> 3261 Anmoore Road, Brooklyn, NY 11230
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-15874"></i>
                                    +01 123 456 78
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@youremal.com">
                                    <i class="icon-mail"></i>
                                    info@youremal.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tt-col">
                        <div class="tt-box-info">
                            <div class="tt-item">
                                <h6 class="tt-ttile"><i class="icon-icon"></i>Sales Department</h6>
                                <ul>
                                    <li>Mon-Sat : 8:00am - 5:00pm</li>
                                    <li>Sunday is closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tt-col">
                        <div class="tt-box-info">
                            <div class="tt-item">
                                <h6 class="tt-ttile"><i class="icon-icon"></i>Service Department</h6>
                                <ul>
                                    <li>Mon-Sat : 8:00am - 5:00pm</li>
                                    <li>Sunday is closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tt-col">
                        <div class="tt-box-info">
                            <div class="tt-item">
                                <h6 class="tt-ttile"><i class="icon-mail1"></i>NEWSLETTER</h6>
                                <form id="newsletterform" method="post" novalidate="novalidate" action="#">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control"
                                            placeholder="enter your email to subscribe">
                                    </div>
                                    <button type="submit" class="tt-btn">SUBSCRIBE</button>
                                    <div class="tt-modal-message">Form sent successfully</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col col-auto">
                        <ul class="tt-social-icon">
                            <li><a href="https://www.facebook.com/" target="_blank" class="icon-226234"></a></li>
                            <li><a href="https://twitter.com" target="_blank" class="icon-8800"></a></li>
                            <li><a href="https://www.google.com/" target="_blank" class="icon-733613"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tt-footer-copyright">
            <div class="container">
                <span>&copy; Copyright 2022 Car Leader</span> <a href="#">PRIVACY POLICY</a>
            </div>
        </div>
    </footer>
    <a href="#" id="ttBackToTop" class="tt-back-to-top">BACK TO TOP</a>

    <div id="compareSlide" class="layout-slide">
        <div class="slide-content">
            <div class="slide-title">
                <h6 class="title">Compare Vehicles</h6>
                <a class="btn-close-slide icon-close"></a>
            </div>
            <div class="tt-wrapper-col">
                <div class="col-value">
                    <ul>
                        <li>Price:</li>
                        <li>Make</li>
                        <li>Model</li>
                        <li>MILEAGE:</li>
                        <li>FUEL TYPE:</li>
                        <li>YEAR:</li>
                        <li>TRANSMission:</li>
                        <li>Drive Type:</li>
                        <li>Color:</li>
                        <li>Int. Color:</li>
                        <li>VIN:</li>
                        <li>Engine:</li>
                        <li>Stock number:</li>
                        <li>Features &amp; Options</li>
                    </ul>
                </div>
                <div class="col-item">
                    <a href="#" class="item-close"><i class="icon-close"></i></a>
                    <div class="img-obj"><img src="images/product_02/product_02_img_02.jpg" alt=""></div>
                    <ul>
                        <li class="value-item value-select">$99,625</li>
                        <li class="value-item">Lehus</li>
                        <li class="value-item">LX 570</li>
                        <li class="value-item">0 miles</li>
                        <li class="value-item">Gas</li>
                        <li class="value-item">2018</li>
                        <li class="value-item">Automatic</li>
                        <li class="value-item">Front Wheel Drive</li>
                        <li class="value-item">Jet Black</li>
                        <li class="value-item">Cabernet Premium Leather</li>
                        <li class="value-item">JTJHY7AX6H4250229</li>
                        <li class="value-item">V6 EcoBoost TT</li>
                        <li class="value-item">252832</li>
                        <li class="value-item value-multy">
                            2-Stage Unlocking Doors, ABS: 4-Wheel,Active Head Restraints: Dual Front, Air Conditioning,
                            Air Filtration, Airbag Deactivation: Occupant Sensing Passenger, Ambient Lighting, Antenna
                            Type: Diversity, Anti-Theft System:2-Stage Unlocking Doors, ABS: 4-Wheel,Active
                            Head 2-Stage Unlocking Doors, ABS: 4-Wheel,Active Head
                        </li>
                    </ul>
                </div>
                <div class="col-item">
                    <a href="#" class="item-close"><i class="icon-close"></i></a>
                    <div class="img-obj"><img src="images/product_02/product_02_img_03.jpg" alt=""></div>
                    <ul>
                        <li class="value-item value-select">$48,430</li>
                        <li class="value-item">Volve</li>
                        <li class="value-item">XC60</li>
                        <li class="value-item">0 miles</li>
                        <li class="value-item">Gas</li>
                        <li class="value-item">2018</li>
                        <li class="value-item">Automatic</li>
                        <li class="value-item">Front Wheel Drive</li>
                        <li class="value-item">Jet Black</li>
                        <li class="value-item">Cabernet Premium Leather</li>
                        <li class="value-item">JTJHY7AX6H4250229</li>
                        <li class="value-item">V6 EcoBoost TT</li>
                        <li class="value-item">215838</li>
                        <li class="value-item value-multy">
                            2-Stage Unlocking Doors, ABS: 4-Wheel,Active Head Restraints: Dual Front, Air Conditioning,
                            Air Filtration, Airbag Deactivation: Occupant Sensing Passenger, Ambient Lighting, Antenna
                            Type: Diversity, Anti-Theft System:
                        </li>
                    </ul>
                </div>
                <div class="col-item">
                    <a href="#" class="item-close"><i class="icon-close"></i></a>
                    <div class="img-obj"><img src="images/product_02/product_02_img_06.jpg" alt=""></div>
                    <ul>
                        <li class="value-item value-select">$27,850</li>
                        <li class="value-item">Nesen</li>
                        <li class="value-item">Almera</li>
                        <li class="value-item">80,000 miles</li>
                        <li class="value-item">Gas</li>
                        <li class="value-item">2017</li>
                        <li class="value-item">Automatic</li>
                        <li class="value-item">Front Wheel Drive</li>
                        <li class="value-item">Jet Black</li>
                        <li class="value-item">Cabernet Premium Leather</li>
                        <li class="value-item">JTJHY7AX6H4250229</li>
                        <li class="value-item">V6 EcoBoost TT</li>
                        <li class="value-item">112532</li>
                        <li class="value-item value-multy">
                            2-Stage Unlocking Doors, ABS: 4-Wheel,Active Head Restraints: Dual Front, Air Conditioning,
                            Air Filtration, Airbag Deactivation: Occupant Sensing Passenger, Ambient Lighting, Antenna
                            Type: Diversity, Anti-Theft System:
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
