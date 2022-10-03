@extends('layouts.layout')
@section('title', 'Upload New Car')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Car Details</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                        @if ($car->status == 'pending')
                            <a href="{{ route('user.publishcars', $car->slug) }}" class="btn btn-sm btn-danger btn-add">
                                <i class="la la-plus"></i> PUBLISH CAR</a>
                        @endif

                    </div>

                    <div class="action-btn">
                        <a href="{{ route('user.mycars') }}" class="btn btn-sm btn-primary btn-add">
                            <i class="la la-plus"></i> My Cars</a>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-5">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>You provided the following details</h6>
                </div>
                <div class="card-body">
                    <div class="basic-form-wrappers">
                        <img src="{{ asset('storage/cars/' . $car->car_image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>Name</th>
                                <th>Description</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Car Name</td>
                                    <td>{{ $car->car_name }}</td>
                                </tr>
                                <tr>
                                    <td>Car Category</td>
                                    <td>{{ $car->carrmakefetch->car_make_name }}</td>
                                </tr>
                                <tr>
                                    <td>Car Model</td>
                                    <td>{{ $car->carrmakemodelfetch->car_make_model_name }}</td>
                                </tr>
                                <tr>
                                    <td>Reg. Number</td>
                                    <td>{{ $car->reg_number }}</td>
                                </tr>
                                <tr>
                                    <td>Car year</td>
                                    <td>{{ $car->car_year }}</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>{{ $car->transmission }}</td>
                                </tr>
                                <tr>
                                    <td>Fuel Type</td>
                                    <td>{{ $car->fuel_type }}</td>
                                </tr>
                                <tr>
                                    <td>Loading capacity</td>
                                    <td>{{ $car->loading_capacity }} KGs</td>
                                </tr>
                                <tr>
                                    <td>Car Color</td>
                                    <td>{{ $car->car_color }}</td>
                                </tr>
                                <tr>
                                    <td>Car Engine </td>
                                    <td>{{ $car->engine_cc }}
                                        cc</td>
                                </tr>
                                <!-- @if ($car->car_owner_id == Auth::user()->id)
                                    @if ($car->status == 'published' || $car->status == 'sold')
                                        <tr class="text-success">
                                            <td><strong>Highest Bid </strong></td>
                                            <td><strong>KES {{ $highest->bidding_price }}</strong></td>
                                        </tr>
                                        <tr class="text-success font-bold">
                                            <td><strong>Highest Bidder</strong></td>
                                            <td><strong>{{ $highest->carbidcustomer->name }} -
                                                    {{ $highest->carbidcustomer->phone_number }}</strong></td>
                                        </tr>
                                        <tr class="text-success">
                                            <td><strong>Date Placed</strong></td>
                                            <td><strong>{{ $highest->created_at->format('d, M Y') }}</strong></td>
                                        </tr>
                                    @endif
                                @endif -->

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- ends: .card -->

        </div>
        <div class="col-lg-7">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>More Photos?</h6>
                </div>
                <div class="card-body">
                    <div class="basic-form-wrappers">
                        @livewire('users.upload-car-photos', ['carslug' => $slug])
                    </div>
                    <p><strong>Features: </strong></p>
                    <p>{{ $car->features }}</p>
                    <br>
                    <p><strong>Description: </strong></p>
                    <p>{{ $car->car_description }}</p>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <!-- ends: .col-lg-6 -->
    </div>
@endsection
