@extends('layouts.layout')
@section('title', 'My Cars')

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
                        <table class="table table-bordered table-stripped" id="example">
                            <thead>
                                <th>Image</th>
                                <th>Car</th>
                                <th>Reg No.</th>
                                <th>Engine</th>
                                <th>Car Year</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th>Bid</th>
                                <th>Date Submited</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach ($bids as $bid)
                                    <tr>
                                        <td><img src="{{ asset('storage/cars/'.$bid->cardetails->car_image) }}" style="height:60px;width:80px;border-radius:9px;" alt=""></td>
                                        <td>{{ $bid->cardetails->car_name }}</td>
                                        <td class="text-uppercase">{{ $bid->cardetails->reg_number }}</td>
                                        <td>{{ $bid->cardetails->engine_cc }} cc</td>
                                        <td>{{ $bid->cardetails->car_year }}</td>
                                        <td>KES {{ $bid->cardetails->min_price }}</td>
                                        <td>{{ $bid->cardetails->car_color }}</td>
                                        <td>

                                           KES  {{ $bid->bidding_price }}</td>

                                        <td>{{ $bid->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <a href="{{ route('user.verifycarprofile', $bid->cardetails->slug) }}">View</a>
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
