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
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
</head>

<body>

    <!-- tt-mobile menu -->
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

        <!-- panel-info -->

        <!-- header-holder -->
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
                                    <li class="is-subMenu">
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
            <div class="container">
                <div class="tt-stuck-row">

                </div>
            </div>
        </div>
    </header>
    <div class="tt-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Cars</a></li>
                <li>{{ $car->car_name }} - {{ $car->car_year }}</li>
            </ul>
        </div>
    </div>
    <div id="tt-pageContent">
        <div class="container-indent-05">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-8">
                        <a href="{{ url('all-cars') }}" class="tt-link-back">RETURN TO CARS</a>
                        <div class="tt-title-single">
                            <h1 class="tt-title">{{ $car->car_name }} - {{ $car->engine_cc }} cc</h1>
                            {{-- <div class="tt-description"></div> --}}
                        </div>
                        <div class="tt-aside-btn visible-xs">

                        </div>
                        <!-- mobile product slider  -->
                        <div class="tt-mobile-product-layout visible-xs">
                            <div class="tt-mobile-product-slider arrow-location-center slick-animated-show-js">
                                @foreach ($photos as $photoo)
                                    <div><img src="{{ asset('storage/cars/' . $photoo->image_name) }}" alt="">
                                    </div>
                                @endforeach


                            </div>
                            <div class="tt-label-location">
                                <span class="tt-label-promo">Great Deal!</span>
                            </div>
                        </div>
                        <div class="tt-layout-preview hidden-xs">
                            <div class="tt-product-single-img">
                                <div class="tt-label-location">
                                    <span class="tt-label-promo">Great Deal!</span>
                                </div>
                                <div>
                                    <img class="zoom-product" src='{{ asset('storage/cars/' . $car->car_image) }}'
                                        data-zoom-image="{{ asset('storage/cars/' . $car->car_image) }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="product-images-carousel">
                                <ul id="smallGallery" class="tt-arrow-center-small slick-animated-show-js">
                                    <li><a class="zoomGalleryActive" href="#"><img
                                                src="{{ asset('storage/cars/' . $car->car_image) }}"
                                                alt="" /></a></li>
                                    @foreach ($photos as $photo)

                                        <a class="gallery"
                                            href="{{ asset('storage/cars/' . $photo->image_name) }}"
                                            data-lightbox="mygallery"
                                            data-title="Click anywhere outside the image or the X to the right to close."><img
                                                class="example-image"
                                                src="{{ asset('storage/cars/' . $photo->image_name) }}"
                                                alt="" /></a>
                                    @endforeach
                                    <li>
                                        <div class="video-link-product" data-toggle="modal" data-type="youtube"
                                            data-target="#modalVideoProduct"
                                            data-value="http://www.youtube.com/embed/bQz2Er3K8t8derfde">
                                            <img src="{{ asset('storage/cars/' . $car->car_image) }}" alt="">
                                            <div>
                                                <i class="icon-play"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="video-link-product" data-toggle="modal" data-type="video"
                                            data-target="#modalVideoProduct" data-value="video/video.mp4"
                                            data-poster="video/video_img.jpg">
                                            <img src="{{ asset('storage/cars/' . $car->car_image) }}" alt="">
                                            <div>
                                                <i class="icon-play"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-box-indent">
                            <h6 class="tt-title-single-sub">Features</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="tt-list03">
                                        {{ $car->features }}
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="tt-box-indent">
                            <h6 class="tt-title-single-sub">Vehicle Overview</h6>
                            {{ $car->car_description }}
                        </div>
                        <div class="tt-box-indent">
                            <h6 class="tt-title-single-sub">
                                Place Your Bid
                            </h6>

                        </div>
                    </div>
                    <div class="col-12 col-md-4 js-sticky-sidebar">
                        <div class="tt-aside03-layout">

                            <div class="tt-aside-promo">
                                <div class="tt-wrapper">
                                    <div class="tt-value">KES {{ $car->min_price }}</div>
                                    <p>
                                        Place Your Bid Starting from
                                    </p>
                                    <a href="#placenow" class="btn btn-xl">Place Bid</a>
                                </div>

                            </div>
                            <div class="tt-aside03-box">
                                <h6 class="tt-aside03-title">Options</h6>
                                <div class="tt-aside03-content">
                                    <table class="tt-table-options">
                                        <tbody>
                                            <tr>
                                                <td>MILEAGE:</td>
                                                <td>{{ $car->milleage }} </td>
                                            </tr>
                                            <tr>
                                                <td>FUEL TYPE:</td>
                                                <td>{{ $car->fuel_type }}</td>
                                            </tr>
                                            <tr>
                                                <td>YEAR:</td>
                                                <td>{{ $car->car_year }}</td>
                                            </tr>
                                            <tr>
                                                <td>TRANSMission:</td>
                                                <td>{{ $car->car_type }}</td>
                                            </tr>

                                            <tr>
                                                <td>Color:</td>
                                                <td>{{ $car->car_color }}</td>
                                            </tr>

                                            <tr>
                                                <td>Car Reg.</td>
                                                <td>{{ $car->reg_number }}</td>
                                            </tr>
                                            <tr>
                                                <td>Engine:</td>
                                                <td>{{ $car->engine_cc }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tt-aside-calculator" id="placenow">
                                @if (Session::has('error'))
                                    <div class="bg-danger py-1 px-1 text-light">
                                        <ul>
                                            <li>{{ Session::get('error') }}</li>
                                        </ul>
                                    </div>
                                @endif
                                @if (Session::has('success'))
                                    <div class="bg-success py-1 px-1 text-light">
                                        <ul>
                                            <li>{{ Session::get('success') }}</li>
                                        </ul>
                                    </div>
                                @endif
                                <form class="tt-form-default" method="POST" action="{{ url('place-car-bid/') }}">
                                    @csrf
                                    <div class="tt-wrapper-top">
                                        <h6 class="tt-calculator-title">
                                            <span class="icon-calculator"></span>
                                            Place Your Bid
                                        </h6>
                                        <input type="hidden" name="car_name" value="{{ $car->slug }}">
                                        <div class="tt-calculator-content">
                                            <div class="tt-form-aside">
                                                <div class="form-group">
                                                    <label>Your Bidding price (KES)</label>
                                                    <input type="number" class="form-control"
                                                        placeholder="{{ $car->min_price }}"
                                                        min="{{ $car->min_price }}" name="bid_amount" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Your Email Address</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="example@gmail.com" name="user_email" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-fullwidth">PLACE BID</button>
                                        </div>
                                    </div>
                                    <div class="tt-wrapper-bottom">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container">
                <div class="tt-block-title">
                    <h3 class="tt-title">You May Also Be Interested In</h3>
                </div>
                <div class="js-carousel-col-4 tt-slider-product tt-arrow-center slick-alignment-arrows">
                    @foreach ($othercars as $othercar)
                        <div>
                            <div class="tt-product-02">
                                <div class="tt-image-box">
                                    <a href="{{ url('car/' . $othercar->slug) }}" class="tt-img">
                                        <img src="{{ asset('storage/cars/' . $othercar->car_image) }}"
                                            alt="">
                                        <span class="tt-label-location">
                                            <span class="tt-label-promo">
                                                Great Deal!
                                            </span>
                                        </span>
                                        <span class="tt-data">{{ $othercar->milleage }} miles</span>
                                    </a>
                                    <ul class="tt-icon">
                                        <li><a href="#" data-toggle="modal" data-target="#modalAddTestDrive"
                                                title="TEST-DRIVE" class="tooltip"><i class="icon-testdrive"></i></a>
                                        </li>
                                        <li><a href="{{ asset('storage/cars/' . $othercar->car_image) }}"
                                                title="GALLERY" class="tooltip tt-btn-zomm"><i
                                                    class="icon-photo-camera"></i></a></li>
                                        <li><a href="#" title="COMPARE" class="tooltip compare-toggle"><i
                                                    class="icon-compare"></i></a></li>
                                    </ul>
                                </div>
                                <div class="tt-wrapper-description">
                                    <div class="tt-box-title">
                                        <h2 class="tt-title"><a
                                                href="{{ url('car/' . $othercar->slug) }}">{{ $othercar->car_year }}
                                            </a>
                                        </h2>
                                        <div class="tt-description">
                                            {{ $car->car_name }}
                                        </div>
                                    </div>
                                    <div class="tt-box-price">
                                        {{-- <span class="tt-text">List:</span> --}}
                                        <span class="tt-price">KES {{ $othercar->min_price }}</span>
                                    </div>
                                    <ul class="tt-icon">
                                        <li><a href="#" data-toggle="modal" data-target="#modalAddTestDrive"
                                                title="TEST-DRIVE" class="tooltip"><i class="icon-testdrive"></i></a>
                                        </li>
                                        <li><a href="{{ asset('storage/cars/' . $othercar->car_image) }}"
                                                title="GALLERY" class="tooltip tt-btn-zomm"><i
                                                    class="icon-photo-camera"></i></a></li>
                                        <li><a href="#" title="COMPARE" class="tooltip compare-toggle"><i
                                                    class="icon-compare"></i></a></li>
                                    </ul>
                                    <div class="tt-btn">
                                        <a href="{{ url('car/' . $othercar->slug) }}" class="tt-btn-moreinfo">more
                                            info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


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
