@extends('layouts.layout')
@section('title', 'Upload New Car')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Car Details</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                        @if ($car->status=="pending")
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
                        <img src="{{ asset('storage/cars/'.$car->car_image) }}" class="img-fluid" alt="">
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
                                <tr>
                                    <td>Features</td>
                                    <td>{{ $car->features }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $car->car_description }}</td>
                                </tr>
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
                                @livewire('users.upload-car-photos', ['carslug' => $slug])
                    </div>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <!-- ends: .col-lg-6 -->
    </div>
@endsection
