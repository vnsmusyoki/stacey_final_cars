@extends('pages.layout')
@section('title', 'View Car details')
@section('content')
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
                        class="tt-mobile-hide">{{ $cars->count() }}&nbsp;</span>CARS</a>
            </div>
        </div>
    </div>
</div>
<div class="container-indent">
    <div class="container">
        <div class="tt-block-title">
            <h1 class="tt-title">Welcome to <span class="tt-defaul-color">Car</span> Auctioning System</h1>
            <div class="tt-description">The Easiest Way to Find Your Next Car</div>
        </div>
        <div class="tt-text-center ws-short-structure">
            For 25 years, SmartMart Motors has been raising the standard of used car retailing with one of the
            most
            innovative and reliable used vehicle programmes ever created. A comprehensive range of benefits as
            standard has evolved over time and, today, drivers can
            leave the forecourt with total reassurance and peace of mind.
            <span class="tt-hide-block">
                We call this estimate the SmartMart Motors
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
            <div class="tt-description">APPROVED USED CARS FOR SALE</div>
        </div>
        <!--carusel-->
        <div class="js-carousel tt-arrow-center-fluid tt-arrow-color02 slick-alignment-arrows" data-item="5"
            data-dots="true">
            @foreach ($cars as $car)
                <a href="{{ url('car/'.$car->slug) }}" class="tt-media-02">
                    <img src="{{ asset('storage/cars/'.$car->car_image) }}" alt="" style="height:300px !important;width:100%;">
                    <div class="tt-description">
                        <h5 class="tt-title">{{ $car->car_model }} <span class="tt-total">KES: {{ $car->min_price }} <span></span></span></h5>
                        <span class="tt-link-marker">Place Bid Now</span>
                    </div>
                </a>
            @endforeach


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
                    <h6 class="tt-title">Create an account</h6>
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
                    <h6 class="tt-title">Upload your car</h6>
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
                    <h6 class="tt-title">Other users to place bids</h6>
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
                    <h6 class="tt-title">Pick the highest bidder and close the bid</h6>
                </a>
            </div>
        </div>
    </div>
</div>




<div class="container-indent">
    <div class="container">
        <div class="tt-block-title tt-title-custom">
            <h3 class="tt-title">Sell Your Car to the highest bidder</h3>
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
@endsection
