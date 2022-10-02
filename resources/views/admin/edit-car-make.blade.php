@extends('layouts.layout')
@section('title', 'All Car Make ')

@section('content')
    <div cl ass="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">All Car Make Categories available </h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-12">
            <form action="{{ url('admin/update-carmake/'.$makes->slug) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class=" card row">
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Edit Car Make</label>
                            <input type="text" name="car_make" class="form-control" value="{{ $makes->car_make_name }}"
                                required style="text-transform: uppercase; letter-spacing:2px;font-weight:800;">
                            @error('car_make')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 py-1">
                        <button type="submit" class="btn btn-primary mt-3">SUBMIT CAR MAKE</button>
                    </div>
                </div>


            </form>
        </div>


        <!-- ends: .col-lg-6 -->
    </div>
@endsection
