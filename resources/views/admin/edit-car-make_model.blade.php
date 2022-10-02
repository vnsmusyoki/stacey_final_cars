@extends('layouts.layout')
@section('title', 'Edit Car Make Model')

@section('content')
    <div cl ass=" card row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Edit Car Make  Model Categories available </h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">

                    </div>
                </div>
            </div>

        </div>
        <div class=" col-lg-12">
            <form action="{{ url('admin/update-carmake-model/'.$model->slug) }}" method="POST" class="card px-2 py-4">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Car Make</label>
                           <select name="car_make" id="" class="form-control">
                            <option value="">click to select</option>
                            @foreach ($makes as $item)
                                <option value="{{ $item->id }}" {{  ( $item->id == $model->car_make_id) ? 'selected': '' }}>{{ $item->car_make_name }}</option>
                            @endforeach
                           </select>
                            @error('car_make')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Car Make Model</label>
                            <input type="text" name="car_make_model" class="form-control" value="{{ $model->car_make_model_name }}"
                                required style="text-transform: uppercase; letter-spacing:2px;font-weight:800;">
                            @error('car_make_model')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 py-1">
                        <button type="submit" class="btn btn-primary mt-3">UPDATE CAR MAKE MODEL</button>
                    </div>
                </div>


            </form>
        </div>
     

        <!-- ends: .col-lg-6 -->
    </div>
@endsection
