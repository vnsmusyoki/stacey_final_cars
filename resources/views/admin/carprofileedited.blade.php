@extends('layouts.layout')
@section('title', 'Upload New Car')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Car Details</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                        @if ($car->status == 'admin')
                            <a href="{{ route('admin.publishcars', $car->slug) }}" class="btn btn-sm btn-danger btn-add">
                                <i class="la la-plus"></i> APPROVE CAR</a>


                        @endif

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

                                    <td>Car Owner</td>
                                    <td>{{ $car->carowner->name }}</td>
                                </tr>
                                <tr>

                                    <td>Email Address</td>
                                    <td>{{ $car->carowner->email }}</td>
                                </tr>
                                <tr>

                                    <td>Phone Number</td>
                                    <td>{{ $car->carowner->phone_number }}</td>
                                </tr>
                                <tr>

                                    <td>Username</td>
                                    <td>{{ $car->carowner->username }}</td>
                                </tr>
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
                                <tr>
                                    <td>Bidding Ends At</td>
                                    <td>{{ $car->bidding_time_expiry }}</td>
                                </tr>
                                <!-- @if ($car->status == 'published' || $car->status == 'sold')
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
                    <h6>Upload More Photos?</h6>
                </div>
                <div class="card-body">
                    <div class="basic-form-wrappers">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Image</th>
                                        <th>FIle Name</th>
                                        <th class="text-nowrap">Date Uploaded</th>
                                        <th>File Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($attachments as $key=>$item)
                                        <tr class="text-sm">
                                            <td>{{ ++$key }}</td>
                                            <td><img src="{{ asset('storage/cars/' . $item->image_name) }}" alt=""
                                                    style="height:60px;width:120px;"></td>
                                            <td>{{ $item->image_name }}</td>
                                            <td>{{ $item->created_at->format('d M Y') }}</td>
                                            <td>{{ $item->file_size }} MB</td>


                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No Attachments Found</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                            <div class="mt-2">
                                <p><strong>Features: </strong></p>
                                <p>{{ $car->features }}</p>
                                <br>
                                <p><strong>Description: </strong></p>
                                <p>{{ $car->car_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <!-- ends: .col-lg-6 -->
    </div>
@endsection
