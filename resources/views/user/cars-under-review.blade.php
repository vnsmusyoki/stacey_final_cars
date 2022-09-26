@extends('layouts.layout')
@section('title', 'Upload New Car')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Car Details</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">

                    </div>

                    <div class="action-btn">
                        <a href="{{ route('user.mycars') }}" class="btn btn-sm btn-primary btn-add">
                            <i class="la la-plus"></i> My Cars</a>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>You provided the following details</h6>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>Image</th>
                                <th>Car</th>
                                <th>Make</th>
                                <th>Reg No.</th>
                                <th>Engine</th>
                                <th>Car Year</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    <tr>
                                        <td><img src="{{ asset('storage/cars/'.$car->car_image) }}" style="height:60px;width:80px;" alt=""></td>
                                        <td>{{ $car->carrmakefetch->car_make_name }}</td>
                                        <td>{{ $car->carrmakemodelfetch->car_make_model_name }}</td>
                                        <td>{{ $car->reg_number }}</td>
                                        <td>{{ $car->engine_cc }}</td>
                                        <td>{{ $car->car_year }}</td>
                                        <td>
                                            <a href="{{ route('user.verifycarprofile', $car->slug) }}">View</a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- ends: .card -->

        </div>

        <!-- ends: .col-lg-6 -->
    </div>
@endsection
