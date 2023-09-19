@extends('layouts.layout')
@section('title', 'Submit Car payment details')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Car Details</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                        @if ($car->status == 'pending')
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
                                @if ($car->user_awarded_id == Auth::user()->id)
                                    @if ($car->status == 'published' || $car->status == 'sold')
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
                                    @endif
                                @endif

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
                    <h6>Vehicle Gallery</h6>
                </div>
                <div class="card-body">
                    <div class="basic-form-wrappers">
                        <div class="row">
                            <div class="col-12">
                                @if ($message = Session::get('errormessage'))
                                    <div class="alert alert-danger alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                @if ($message = Session::get('message'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Image</th>
                                                <th>FIle Name</th>
                                                <th class="text-nowrap">Date Uploaded</th>
                                                <th>File Size</th>
                                                @if ($car->car_owner_id == Auth::user()->id)
                                                    <th>Action</th>
                                                @endif

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($images as $key=>$item)
                                                <tr class="text-sm">
                                                    <td>{{ ++$key }}</td>
                                                    <td><img src="{{ asset('storage/cars/' . $item->image_name) }}"
                                                            alt="" style="height:60px;width:120px;"></td>
                                                    <td>{{ $item->image_name }}</td>
                                                    <td>{{ $item->created_at->format('d M Y') }}</td>
                                                    <td>{{ $item->file_size }} MB</td>
                                                    @if ($car->car_owner_id == Auth::user()->id)
                                                        <td>
                                                            <button class="btn btn-danger"
                                                                wire:click="removepic({{ $item->id }})">Remove</button>
                                                        </td>
                                                    @endif


                                                </tr>

                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No Attachments Found</td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end mt-2 mr-1">
                                        {{-- {{ $attachments->links() }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <p><strong>Features: </strong></p>
                    <p>{{ $car->features }}</p>
                    <br>
                    <p><strong>Description: </strong></p>
                    <p>{{ $car->car_description }}</p>
                    <hr>
                    <h4><strong>Payment Procedure</strong></h4>
                    <ul>
                        <li>Select Lipa na Mpesa</li>
                        <li>Select Pay Bill</li>
                        <li>Use 4031299 as your business number</li>
                        <li> Enter the amount </li>
                        <li>You will receive a confirmartion SMS from M-PESA</li>
                        <li>SUbmit the code  received via the form below</li>

                    </ul>
                    <form action="{{ url('user/upload-payment') }}" method="POST">
                        @csrf
                        <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">Transaction Code</label>
                                    <input type="text" name="transaction_code" class="form-control"
                                        value="{{ old('transaction_code') }}" required
                                        style="text-transform: uppercase; letter-spacing:2px;font-weight:800;">
                                    @error('transaction_code')
                                        <div class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 py-1">
                                <button type="submit" class="btn btn-primary mt-3">SUBMIT PAYMENT</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <!-- ends: .col-lg-6 -->
    </div>
@endsection
