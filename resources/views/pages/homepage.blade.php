@extends('pages.layout')
@section('title', 'View Car details')
@section('content')

<div class="container-indent">
    <div class="container">
        <div class="tt-block-title">
            <h1 class="tt-title">Welcome to <span class="tt-defaul-color">SmartMartCars</span> Auctioning System</h1>
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
                <a href="{{ url('register') }}" class="tt-item">
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
                <a href="{{ url('login') }}" class="tt-item">
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
                <a href="{{ url('login') }}" class="tt-item">
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
                <a href="{{ url('login') }}" class="tt-item">
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
            <a href="{{ url('login') }}" class="btn" data-toggle="modal" data-target="#modalAddYourItem">SUBMIT YOUR
                VEHICLE NOW</a>
        </div>
    </div>
</div>

@endsection
