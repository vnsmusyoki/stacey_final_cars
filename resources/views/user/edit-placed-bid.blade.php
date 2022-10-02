@extends('layouts.layout')
@section('title', 'Edit Placed Bid')

@section('content')
    <div class="row">
        <div class="col-lg-12">



        </div>


        <div class="products mb-30">
            <div class="container-fluid">
                <!-- Start: Card -->
                <div class="card product-details h-100">
                    <div class="product-item d-flex p-sm-40 p-20">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Start: Product Slider -->
                                <div class="product-item__image">
                                    <div class="wrap-gallery-article">
                                        <div id="myCarouselArticle" class="carousel slide carousel-fade"
                                            data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarouselArticle" data-slide-to="0" class="active"></li>
                                                @foreach ($images as $item)
                                                    <li data-target="#myCarouselArticle"
                                                        data-slide-to="{{ $item->id }}"></li>
                                                @endforeach

                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="img-fluid d-flex bg-opacity-primary "
                                                        src="{{ asset('storage/cars/' . $car->car_image) }}"
                                                        alt="Card image cap" title="">
                                                </div>
                                                @foreach ($images as $imagelist)
                                                    <div class="carousel-item">
                                                        <img class="img-fluid d-flex bg-opacity-primary"
                                                            src="{{ asset('storage/cars/' . $imagelist->image_name) }}"
                                                            alt="Card image cap" title="">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="overflow-hidden " id="slider-thumbs">
                                            <!-- Bottom switcher of slider -->
                                            <ul class="reset-ul d-flex flex-wrap list-thumb-gallery">

                                                @foreach ($images as $imagelist)
                                                    <li>
                                                        <a href="#" class="thumbnail" data-target="#myCarouselArticle"
                                                            data-slide-to="1">
                                                            <img class="img-fluid d-flex bg-opacity-primary"
                                                                src="{{ asset('storage/cars/' . $imagelist->image_name) }}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!-- End: Product Slider -->
                            </div>
                            <div class=" col-lg-7">
                                <!-- Start: Product Details -->
                                <div class=" border-bottom mb-25 pb-sm-30 pb-15 mt-lg-0 mt-15">
                                    <div class="product-item__body">
                                        <!-- Start: Product Title -->
                                        <div class="product-item__title">
                                            <h2 class="card-title fw-500">
                                                <a href="#">Car Details</a>
                                            </h2>
                                        </div>
                                        <!-- End: Product Title -->
                                        <div class="product-item__content text-capitalize">

                                            <!-- Start: Product Brand -->
                                            <span
                                                class="product-details-brandName">Brand:<span>{{ $car->car_name }}</span></span>
                                            <span class="product-desc-price">
                                                <sub></sub>You placed a bid worth: KES {{ $bid->bidding_price }}</span>

                                            <!-- End: Product Brand -->
                                            <!-- Start: Product Description -->
                                            <p class=" product-deatils-pera">{{ $car->car_description }}.</p>
                                            <!-- End: Product Description -->

                                            <!-- Start: Product Stock -->
                                            <div class="product-details__availability">
                                                <div class="title">
                                                    <p>Available:</p>
                                                    <span class="stock">Biddings ends on:-
                                                        {{ Carbon\Carbon::today() }}</span>
                                                </div>

                                            </div>

                                            <!-- Start: Product Selections -->
                                            <div class="product-item__button mt-lg-30 mt-sm-25 mt-20 d-flex flex-wrap">
                                                <div class=" d-flex flex-wrap product-item__action align-items-center">
                                                    <a href="{{ route('user.verifycarprofile', $car->slug) }}"
                                                        class="btn btn-primary btn-default btn-squared border-0 mr-10 my-sm-0 my-4">Full
                                                        car Details</a>

                                                    <form action="{{ url('user/update-submited-bid/' . $bid->slug) }}"
                                                        method="POST">
                                                        @method('PATCH')
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="number" min="{{ $car->min_price }}"
                                                                        placeholder="{{ $bid->bidding_price }}" required
                                                                        name="bid_amount" class="form-control">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="bid_id"
                                                                value="{{ $bid->id }}">
                                                            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                                                                <button
                                                                    class="btn btn-secondary btn-default btn-squared border-0 px-25 my-sm-0 my-2 mr-2" type="submit">

                                                                    Update Bid</button>
                                                            </div>
                                                        </div>


                                                    </form>



                                                </div>

                                            </div>
                                            <!-- End: Product Selections -->
                                        </div>
                                    </div>
                                </div>

                                <!-- End: Product Details -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Card -->
            </div>

        </div>
    </div>
@endsection
