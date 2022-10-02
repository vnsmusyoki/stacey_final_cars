@extends('layouts.layout')
@section('title', 'User Dashboard')
@section('content')
    <div class="row ">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">My Dashboard</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">

                        <div class="form-group mb-0">
                            <div class="input-container icon-left position-relative">
                                <span class="input-icon icon-left">
                                    <span data-feather="calendar"></span>
                                </span>
                                <input type="text" class="form-control form-control-default date-ranger"
                                    name="date-ranger"
                                    placeholder="Aug 30, 2022 - {{ Carbon\Carbon::now()->format('M d, Y') }}">
                                <span class="input-icon icon-right">
                                    <span data-feather="chevron-down"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown action-btn">
                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-download"></i> Export
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <span class="dropdown-item">Export With</span>
                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item">
                                <i class="la la-print"></i> Printer</a>
                            <a href="" class="dropdown-item">
                                <i class="la la-file-pdf"></i> PDF</a>
                            <a href="" class="dropdown-item">
                                <i class="la la-file-text"></i> Google Sheets</a>
                            <a href="" class="dropdown-item">
                                <i class="la la-file-excel"></i> Excel (XLSX)</a>
                            <a href="" class="dropdown-item">
                                <i class="la la-file-csv"></i> CSV</a>
                        </div>
                    </div>
                    <div class="dropdown action-btn">
                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-share"></i> Share
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                            <span class="dropdown-item">Share Link</span>
                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item">
                                <i class="la la-facebook"></i> Facebook</a>
                            <a href="" class="dropdown-item">
                                <i class="la la-twitter"></i> Twitter</a>
                            <a href="" class="dropdown-item">
                                <i class="la la-google"></i> Google</a>
                            <a href="" class="dropdown-item">
                                <i class="la la-feed"></i> Feed</a>
                            <a href="" class="dropdown-item">
                                <i class="la la-instagram"></i> Instagram</a>
                        </div>
                    </div>
                    <div class="action-btn">
                        <a href="{{ url('user/upload-car') }}" class="btn btn-sm btn-primary btn-add">
                            <i class="la la-plus"></i> Add New Car</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
            <!-- Card 1 -->
            <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                <div>





                    <div class="overview-content">
                        <h1>{{ $uploaded->count() }}</h1>
                        <p>Uploaded Cars</p>
                        <div class="ap-po-details-time">
                            <span class="color-success"><i class="las la-arrow-up"></i>

                        </div>
                    </div>

                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">
                            <div>
                                <canvas id="mychart8"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 1 End -->
        </div>
        <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
            <!-- Card 2 End  -->
            <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                <div>
                    <div class="overview-content">
                        <h1>{{ $bids->count() }}</h1>
                        <p>Bids Submited</p>

                    </div>

                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">


                            <div>
                                <canvas id="mychart9"></canvas>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 End  -->
        </div>
        <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
            <!-- Card 3 -->
            <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                <div>





                    <div class="overview-content">
                        <h1>Ksh: {{ $maxamount }}</h1>
                        <p>Highest Bid Price</p>

                    </div>

                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">
                            <div>
                                <canvas id="mychart10"></canvas>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 End -->
        </div>
        <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
            <!-- Card 1 -->
            <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                <div>





                    <div class="overview-content">
                        <h1>KES {{ $minamount }}</h1>
                        <p>Lowest Bid</p>

                    </div>

                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">


                            <div>
                                <canvas id="mychart11"></canvas>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 1 End -->
        </div>
        <div class="col-xxl-12 mb-30">

            <div class="card broder-0">
                <div class="card-header">
                    <h6>All My Bids</h6>

                </div>
                <!-- ends: .card-header -->
                <div class="card-body pt-0">
                    <div class="tab-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-stripped" id="exampletwo">
                                <thead>
                                    <tr>
                                        <th>Car</th>
                                        <th>Engine Power</th>
                                        <th>Car Year</th>
                                        <th>Bid Amount</th>
                                        <th>Date Placed</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bids as $item)
                                        <tr>
                                            <td>{{ $item->cardetails->car_name }}</td>
                                            <td>{{ $item->cardetails->engine_cc }}</td>
                                            <td>{{ $item->cardetails->car_year }}</td>
                                            <td>KES {{ $item->bidding_price }}</td>
                                            <td>{{ $item->created_at->format('d M Y') }}</td>
                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                    <li>
                                                        <a href="{{ url('user/car-profile/' . $item->cardetails->slug) }}"
                                                            class="view">
                                                            <span data-feather="eye"></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('user/remove-bid/' . $item->slug) }}"
                                                            class="edit">
                                                            <span data-feather="trash-2"></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('user/edit-bid/' . $item->cardetails->slug . '/' . $item->slug) }}"
                                                            class="remove">
                                                            <span data-feather="edit"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .card-body -->
        </div>

    </div>


    </div>
    <!-- ends: .row -->
    <div class="row">

        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>My Payments</h6>
                </div>
                <div class="card-body">
                  
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped" id="example">
                            <thead>
                                <th>Image</th>
                                <th>Car</th>
                                <th>Reg No.</th>
                                <th>Min Price</th>
                                <th>Customer</th>
                                <th>Phone Number</th>
                                <th>Bid Price</th>
                                <th>My Amount</th>
                                <th>Trans Code</th>
                                <th>Date Uploaded</th>
                                <th>Payment</th>
                            </thead>
                            <tbody>
                                @foreach ($awardedcars as $car)
                                    <tr>
                                        <td><img src="{{ asset('storage/cars/' . $car->car_image) }}"
                                                style="height:60px;width:80px;border-radius:9px;" alt=""></td>
                                        <td>{{ $car->carrmakefetch->car_make_name }}</td>
                                        <td>{{ $car->reg_number }}</td>
                                        <td>KES {{ $car->min_price }}</td>
                                        <td>{{ $car->caruserawarded->name }}</td>
                                        <td>{{ $car->caruserawarded->phone_number }}</td>
                                        <td>
                                            @php
                                                $bid = App\Models\CarBid::where(['car_id' => $car->id, 'award_status' => 1])->first();
                                            @endphp
                                            KES {{ $bid->bidding_price }}</td>

                                        <td>
                                            @php
                                                $price = App\Models\CarPayment::where(['car_id' => $car->id, 'bid_id' => $bid->id])->first();
                                            @endphp
                                            KES {{ $price->owner_amount }}</td>

                                        <td>{{ $price->transaction_code }}</td>
                                        <td>{{ $price->payment_status }}</td>
                                        <td>
                                            @if ($price->payment_status == 'pending')
                                                @if ($price->transaction_code == '')
                                                    <button class="btn btn-success">Waiting Payment</button>
                                                @else
                                                    <form action="{{ url('user/dashboard/approve-payment') }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" name="payment_approve"
                                                            value="{{ $price->slug }}">
                                                        <button class="btn btn-danger btn-xs" type="submit"
                                                            onsubmit="return confirm('Are you ready to accept this payment? ')">Approve</button>
                                                        <a href="{{ url('user/dashboard/reject-payment/' . $price->slug) }}"
                                                            class="badge badge-warning">Reject</a>
                                                    </form>
                                                @endif
                                            @else
                                                <button class="btn btn-success">Accepted</button>
                                            @endif

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
