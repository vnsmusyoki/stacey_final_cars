@extends('layouts.layout')
@section('title', 'Sold Cars')

@section('content')
<div class="row">

    <div class="col-lg-12">
        <div class="card card-default  mb-4">
            <div class="card-header">
                <h6>Sold cars</h6>
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
                            <th>Payment Status</th>
                            <th>Date Approved</th>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <td><img src="{{ asset('storage/cars/'.$car->car_image) }}" style="height:60px;width:80px;border-radius:9px;" alt=""></td>
                                    <td>{{ $car->carrmakefetch->car_make_name }}</td>
                                    <td>{{ $car->reg_number }}</td>
                                    <td>KES {{ $car->min_price }}</td>
                                    <td>{{ $car->caruserawarded->name }}</td>
                                    <td>{{ $car->caruserawarded->phone_number }}</td>
                                    <td>
                                        @php
                                            $bid = App\Models\CarBid::where(['car_id'=>$car->id, 'award_status'=>1])->first();
                                        @endphp
                                       KES  {{ $bid->bidding_price }}</td>

                                        <td>
                                            @php
                                                $price = App\Models\CarPayment::where(['car_id'=>$car->id, 'bid_id'=>$bid->id])->first();
                                            @endphp
                                           KES  {{ $price->owner_amount }}</td>

                                    <td>{{ $price->transaction_code }}</td>
                                    <td>{{ $price->payment_status }}</td>
                                    <td>
                                     {{ $price->updated_at->format('d, M Y') }}
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
