@extends('layouts.layout')
@section('title', 'Admin Dashboard')
@section('content')
<div class="row ">
    <div class="col-lg-12">

        <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Admin Dashboard</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
                <div class="action-btn">

                    <div class="form-group mb-0">
                        <div class="input-container icon-left position-relative">
                            <span class="input-icon icon-left">
                                <span data-feather="calendar"></span>
                            </span>
                            <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Aug 30, 2022 - {{ Carbon\Carbon::now()->format('M d, Y') }}">
                            <span class="input-icon icon-right">
                                <span data-feather="chevron-down"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="dropdown action-btn">
                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a href="" class="btn btn-sm btn-primary btn-add">
                        <i class="la la-plus"></i> Add New</a>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 1 -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>





                <div class="overview-content">
                    <h1>{{ $cars->count() }}</h1>
                    <p>Uploaded Cars</p>

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
                    <h1>{{$bids->count()}}</h1>
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
                    <h1>{{ $users->count() }}</h1>
                    <p>All Users</p>

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
                    <h1>KES {{ $totalpayments}}</h1>
                    <p>Total Payment</p>

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
                <h6>ALL USERS</h6>

            </div>
            <!-- ends: .card-header -->
            <div class="card-body pt-0">
                <div class="col-lg-12">
                    <div class="card card-default  mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stripped" id="example">
                                    <thead>
                                        <th>Full Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th>
                                        <th>Username</th>
                                        <th>Date Joined.</th>
                                        <th>Last Account Update</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }} </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone_number }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->created_at->format('D, d/M/Y, h:i:s A') }}</td>
                                                <td>{{ $user->updated_at->format('D, d/M/Y, h:i:s A') }}</td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- ends: .card -->

                </div>
            </div>
            <!-- ends: .card-body -->
        </div>

    </div>
    <div class="col-xxl-12 mb-30">

        <div class="card border-0">
            <div class="card-header">
                <h6>All payments</h6>

            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-stripped" id="exampletwo">
                        <thead>
                            <th>Image</th>
                            <th>Car</th>
                            <th>Reg No.</th>
                            <th>Owner Price</th>
                            <th>Customer</th>
                            <th>Phone Number</th>
                            <th>My Amount</th>
                            <th>Trans Code</th>
                            <th>Date Uploaded</th>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td><img src="{{ asset('storage/cars/' . $payment->paymentcar->car_image) }}"
                                            style="height:60px;width:80px;border-radius:9px;" alt=""></td>
                                    <td>{{ $payment->paymentcar->car_name }}</td>
                                    <td>{{ $payment->paymentcar->reg_number }}</td>
                                    <td>KES {{ $payment->owner_amount }}</td>
                                    <td>{{ $payment->paymentuser->name }}</td>
                                    <td>{{ $payment->paymentuser->phone_number }}</td>
                                    <td>
                                        KES {{ $payment->admin_amount }}</td>

                                    <td>{{ $payment->transaction_code }}</td>
                                    <td>{{ $payment->updated_at->format('d, M Y, h:i:s A') }}</td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
@if ($newpayments->count() > 0)
    <div class="row">

        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>Payments Received</h6>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped" id="examplethree">
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
                                @foreach ($newpayments as $car)
                                    <tr>
                                        <td><img src="{{ asset('storage/cars/' . $car->paymentcar->car_image) }}"
                                                style="height:60px;width:80px;border-radius:9px;" alt=""></td>
                                        <td>{{ $car->paymentcar->car_name }}</td>
                                        <td>{{ $car->paymentcar->reg_number }}</td>
                                        <td>KES {{ $car->paymentcar->min_price }}</td>
                                        <td>{{ $car->paymentuser->name }}</td>
                                        <td>{{ $car->paymentuser->phone_number }}</td>
                                        <td>

                                            KES {{ $car->paymentbid->bidding_price }}</td>

                                        <td>

                                            KES {{ $car->owner_amount }}</td>

                                        <td>{{ $car->transaction_code }}</td>
                                        <td>{{ $car->payment_status }}</td>
                                        <td>
                                            @if ($car->payment_status == 'pending')
                                                @if ($car->transaction_code == '')
                                                    <button class="btn btn-success">Not Paid</button>
                                                @else 
                                                        <form action="{{ url('admin/dashboard/approve-payment') }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="payment_approve"
                                                                value="{{ $car->slug }}">
                                                            <button class="btn btn-danger btn-xs" type="submit"
                                                                onsubmit="return confirm('Are you ready to accept this payment? ')">Approve</button>
                                                            <a href="{{ url('admin/dashboard/reject-payment/' . $car->slug) }}"
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
    @endif
<!-- ends: .row -->
@endsection
