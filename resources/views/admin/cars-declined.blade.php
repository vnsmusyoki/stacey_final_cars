@extends('layouts.layout')
@section('title', 'Cars Rejected ')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Rejected Cars </h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">

                    </div>

                    <div class="action-btn">
                        <a href="{{ route('admin.approvedcars') }}" class="btn btn-sm btn-primary btn-add">
                            <i class="la la-plus"></i> Approved cars</a>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>cars declined after verification  will be listed here</h6>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped" id="example">
                            <thead>
                                <th>User</th>
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
                                        <td>{{ $car->carowner->name }} </td>
                                        <td><img src="{{ asset('storage/cars/' . $car->car_image) }}"
                                                style="height:60px;width:80px;" alt=""></td>
                                        <td>{{ $car->carrmakefetch->car_make_name }}</td>
                                        <td>{{ $car->carrmakemodelfetch->car_make_model_name }}</td>
                                        <td>{{ $car->reg_number }}</td>
                                        <td>{{ $car->engine_cc }}</td>
                                        <td>{{ $car->car_year }}</td>
                                        <td>
                                            <a href="{{ route('admin.verifycarprofile', $car->slug) }}">View</a>
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
