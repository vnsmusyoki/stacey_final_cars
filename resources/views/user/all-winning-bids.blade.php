@extends('layouts.layout')
@section('title', 'Winning Bids')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Approved Bids Details</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">

                    </div>


                </div>
            </div>

        </div>
        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>The following Bids WON</h6>
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
                                <th>Bidding Deadline</th>
                                <th>Transaction Code</th>
                                <th>Payment Status</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach ($bids as $bid)
                                    <tr>
                                        <td><img src="{{ asset('storage/cars/' . $bid->cardetails->car_image) }}"
                                                style="height:60px;width:80px;border-radius:9px;" alt=""></td>
                                        <td>{{ $bid->cardetails->car_name }}</td>
                                        <td class="text-uppercase">{{ $bid->cardetails->reg_number }}</td>
                                        <td>{{ $bid->cardetails->engine_cc }} cc</td>
                                        <td>{{ $bid->cardetails->car_year }}</td>
                                        <td>KES {{ $bid->cardetails->min_price }}</td>
                                        <td>{{ $bid->cardetails->car_color }}</td>
                                        <td>
                                            KES {{ $bid->bidding_price }}</td>
                                        <td>
                                            @php
                                                $car = App\Models\Car::where('id', $bid->car_id)->first();
                                            @endphp
                                            {{ $car->bidding_time_expiry->format('d-m-Y') }}

                                        </td>
                                        <td>
                                            @php
                                                $payment = App\Models\Carpayment::where('bid_id', $bid->id)->first();
                                            @endphp
                                            {{ $payment->transaction_code }}</td>
                                        <td>
                                            @if ($payment->payment_status == 'approved')
                                                Approved
                                            @elseif($payment->payment_status == 'declined')
                                                Rejected
                                            @else
                                                Not Paid
                                            @endif
                                        </td>
                                        <td>
                                            @if ($payment->transaction_code == null)
                                                <a href="{{ url('user/submit-payment/' . $payment->slug) }}"
                                                    class=" btn-primary btn">Pay
                                                    Now</a>
                                            @else
                                                <a href="#"
                                                    class="btn btn-primary">View</a>
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
