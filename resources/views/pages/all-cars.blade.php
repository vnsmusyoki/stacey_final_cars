<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SmartMart Motors - Online cars Auctoning System</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="CarLeader - Responsive HTML5 Template">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>

    <nav class="panel-menu" id="mobile-menu">
        <ul>

        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <header id="tt-header" class="tt-header-01">
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
                                        <a href="#"><i class="icon-15874"></i> +01 123 456 78</a>
                                    </li>
                                    <li>
                                        <i class="icon-icon"></i> 9:00 AM – 8:00 PM
                                    </li>
                                    <li>
                                        <a href="mailto:info@youremal.com"><i class="icon-mail"></i>
                                            info@youremal.com</a>
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
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Check Out</a></li>
                                <li><a href="#">Sign In</a></li>
                                <li><a href="#">Sign Out</a></li>
                                <li><a href="#">Register</a></li>
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
                    <div class="col tt-cart">
                        <a class="btn-toggle is-popup" href="#">
                            <i class="icon-cart tt-cart"></i>
                        </a>
                        <div class="tt-dropdown-menu">
                            <h6 class="tt-dropdown-title">
                                <a href="#" class="tt-btn-close icon-close"></a>
                                Products in Cart
                            </h6>
                            <div class="tt-search-results">
                                <ul>
                                    <li>
                                        <a href="inventory-item.html">
                                            <div class="thumbnail"><img src="images/product/product_img_05.jpg"
                                                    alt=""></div>
                                            <div class="tt-description">
                                                <div class="tt-title">Bosch 3330 Premium FILTECH Oil </div>
                                                <div class="tt-price">
                                                    $5.23
                                                </div>
                                            </div>
                                        </a>
                                        <span class="tt-close-item icon-close"></span>
                                    </li>
                                    <li>
                                        <a href="inventory-item.html">
                                            <div class="thumbnail"><img src="images/product/product_img_08.jpg"
                                                    alt=""></div>
                                            <div class="tt-description">
                                                <div class="tt-title">Autolite XP5325 Iridium XP Spark Plug, Pack of 4
                                                </div>
                                                <div class="tt-price">
                                                    $24.61
                                                </div>
                                            </div>
                                        </a>
                                        <span class="tt-close-item icon-close"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tt-search-bottom">
                                <div class="price-total">
                                    <label>Total:</label>
                                    <div class="tt-price">$29.84</div>
                                </div>
                                <a href="#" class="btn">CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-holder bg-dark">
            <div class="container">
                <div class="row">
                    <!--logo-->
                    <div class="col-logo">
                        <a class="tt-logo" href="index.html">
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
                                    <li  >
                                        <a href="{{ url('all-cars') }}">ALL CARS</a>

                                    </li>


                                    <li><a href="{{ url('contact-us') }}">CONTACTS</a></li>
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
            <div class="container-fluid">
                <div class="tt-stuck-row">
                    @if (Session::has('error'))
                        <div class="alert alert-error">
                            <ul>
                                <li>{{ Session::get('error') }}</li>
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{{ Session::get('success') }}</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <div class="tt-breadcrumb">
        <div class="container-fluid">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">All Cars</a></li>
            </ul>
        </div>
    </div>
    <div id="tt-pageContent" style="transform: none;">
        <div class="container-fluid" style="transform: none;">
            <div class="container-fluid" style="transform: none;">
                <div class="tt-block-title tt-sub-pages">
                    <h1 class="tt-title">All Cars</h1>
                </div>
                <div class="row" style="transform: none;">
                    <div class="col-md-4 col-lg-3 col-xl-3 leftColumn tt-aside02 js-sticky-sidebar" id="aside-js"
                        style="">


                        {{-- <div class="theiaStickySidebar" style="">
                            <div class="tt-wrapper-aside">
                                <div class="tt-label-aside">
                                    <a href="#" class="tt-btn-col-close"><i class="icon-close"></i></a>
                                    <div class="tt-icon">
                                        <i class="icon-carsearch"></i>
                                    </div>
                                    <div class="tt-title">
                                        Search Our <br>List
                                    </div>
                                </div>
                                <div class="tt-aside-box">
                                    <div class="tt-content">
                                        <div id="tt-filters-aside" class="tt-filters-aside tt-skinSelect-01">
                                            <form class="tt-form-default" method="POST"
                                                action="{{ url('place-car-bid/') }}">
                                                @csrf
                                                <div class="tt-wrapper-top">

                                                    <div class="tt-calculator-content">
                                                        <div class="tt-form-aside">
                                                            <div class="form-group">
                                                                <label>Min Price (KES)</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="200000" min="100000"
                                                                    name="bid_amount" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Your Email Address</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="example@gmail.com" name="user_email"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-fullwidth">FILTER
                                                            CARS</button>
                                                    </div>
                                                </div>
                                                <div class="tt-wrapper-bottom">
                                                    <ul class="tt-data-output">
                                                        <li>Total Cars - <span>{{ $cars->count() }}</span></li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-wrapper-aside">
                                <div class="tt-aside-box">
                                    <h3 class="tt-aside-title">Search car by name</h3>
                                    <div class="tt-content">
                                        <div class="tt-form-search tt-form-default">
                                            <div class="tt-item">
                                                <input type="text" placeholder="SEARCH">
                                            </div>
                                            <div class="tt-item">
                                                <a href="#" class="btn"><i
                                                        class="icon-musica-searcher"></i>SEARCH</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-12 col-lg-9 col-xl-9">


                        <div id="tt-product-listing" class="tt-product-listing row tt-row-view">
                            @foreach ($cars as $car)
                                <div class="col-6 col-md-4 tt-col-item">
                                    <div class="tt-product-02 tt-view">
                                        <div class="tt-image-box">
                                            <a href="{{ url('car/'.$car->slug) }}l" class="tt-img">
                                                <img src="{{ asset('storage/cars/'.$car->car_image) }}" alt=""style="height:300px;width:20vw;">
                                                <span class="tt-label-location">
                                                    <span class="tt-label-new">
                                                        NEW
                                                    </span>
                                                    <span class="tt-label-info">
                                                        360 HP
                                                    </span>
                                                </span>
                                                <span class="tt-data">{{ $car->milleage }} miles</span>
                                            </a>
                                            <ul class="tt-icon">
                                                <li><a href="{{ url('car/'.$car->slug) }}" data-toggle="modal"
                                                        data-target="#modalAddTestDrive" title="TEST-DRIVE"
                                                        class="tooltip"><i class="icon-testdrive"></i></a></li>
                                                <li><a href="{{ url('car/'.$car->slug) }}" title="GALLERY"
                                                        class="tooltip tt-btn-zomm"><i
                                                            class="icon-photo-camera"></i></a></li>
                                                <li><a href="{{ url('car/'.$car->slug) }}" title="COMPARE"
                                                        class="tooltip compare-toggle"><i
                                                            class="icon-compare"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="tt-wrapper-description">
                                            <div class="tt-row-01">
                                                <div class="tt-box-title">
                                                    <h2 class="tt-title"><a href="{{ url('car/'.$car->slug) }}">{{$car->car_name}}</a></h2>
                                                    <div class="tt-description">
                                                        4dr SUV 4WD (5.7L 8cyl 8A)
                                                    </div>
                                                </div>
                                                <div class="tt-box-price">
                                                    <span class="tt-text">Pricing:</span>
                                                    <span class="tt-price">KES {{ $car->min_price }}</span>

                                                </div>
                                            </div>
                                            <ul class="tt-icon">
                                                <li><a href="#" data-toggle="modal"
                                                        data-target="#modalAddTestDrive"><i
                                                            class="icon-testdrive"></i></a></li>
                                                <li><a href="{{ asset('storage/cars/'.$car->car_image) }}" title="GALLERY"
                                                        class="tooltip tt-btn-zomm"><i
                                                            class="icon-photo-camera"></i></a></li>
                                                <li><a href="#" class="compare-toggle"><i
                                                            class="icon-compare"></i></a></li>
                                            </ul>
                                            <div class="tt-row-02">
                                                <ul class="tt-add-info">
                                                    <li>
                                                        <span class="col-title">FUEL TYPE:</span>
                                                        <span class="col-designation">{{ $car->fuel_type }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="col-title">TRANSMission:</span>
                                                        <span class="col-designation">{{ $car->transmission }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="col-title">Color:</span>
                                                        <span class="col-designation">{{ $car->car_color }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="col-title">Engine Power:</span>
                                                        <span class="col-designation">{{ $car->engine_cc }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-btn">
                                                <a href="{{ url('car/'.$car->slug) }}" class="tt-btn-moreinfo">more info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="tt-pagination">
                           {{$cars->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('pages.footer')
    <a href="#" id="ttBackToTop" class="tt-back-to-top">BACK TO TOP</a>

    <script src="{{ asset('external/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('external/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('external/elevatezoom/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('external/slick/slick.min.js') }}"></script>
    <script src="{{ asset('external/panelmenu/panelmenu.js') }}"></script>
    <script src="{{ asset('external/sumoselect/jquery.sumoselect.min.js') }}"></script>
    <script src="{{ asset('external/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('external/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('external/sticky/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- form validation and sending to mail -->
    <script src="{{ asset('external/form/jquery.form.js') }}"></script>
    <script src="{{ asset('external/form/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('external/form/jquery.form-init.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
