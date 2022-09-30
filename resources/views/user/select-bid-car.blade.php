@extends('layouts.layout')
@section('title', 'Select Car ')

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
                                <th>Make</th>
                                <th>Reg No.</th>
                                <th>Engine</th>
                                <th>Car Year</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th>Bids</th>
                                <th>Status</th>
                                <th>Date Uploaded</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    <tr>
                                        <td><img src="{{ asset('storage/cars/'.$car->car_image) }}" style="height:60px;width:80px;border-radius:9px;" alt=""></td>
                                        <td>{{ $car->carrmakefetch->car_make_name }}</td>
                                        <td>{{ $car->carrmakemodelfetch->car_make_model_name }}</td>
                                        <td>{{ $car->reg_number }}</td>
                                        <td>{{ $car->engine_cc }} cc</td>
                                        <td>{{ $car->car_year }}</td>
                                        <td>KES {{ $car->min_price }}</td>
                                        <td>{{ $car->car_color }}</td>
                                        <td>
                                            @php
                                                $bids = App\Models\CarBid::where('car_id', $car->id)->count();
                                            @endphp
                                            {{ $bids }}</td>
                                        <td>
                                            @if ($car->status=="pending")
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">Not Submited</span>
                                            </div>
                                            @elseif($car->status=="admin")
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-primary  color-primary rounded-pill userDatatable-content-status active">Under Review</span>
                                            </div>
                                            @elseif($car->status=="published")
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-primary  color-primary rounded-pill userDatatable-content-status active">Accepted & Published</span>
                                            </div> @elseif($car->status=="hidden")
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">Sold</span>
                                            </div> @else
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">Declined</span>
                                            </div>
                                            @endif
                                        </td>
                                        <td>{{ $car->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <a href="{{ route('user.selectedbidcar', $car->slug) }}" class="btn btn-success">Place Bid</a>
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
