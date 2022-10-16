@extends('layouts.layout')
@section('title', 'All Car Make Model  ')

@section('content')
    <div cl ass="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">All Car Make  Model Categories available </h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">

                    </div>
                </div>
            </div>

        </div>
        <div class="card col-lg-12">
            <form action="{{ url('admin/upload-carmake-model') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Car Make</label>
                           <select name="car_make" id="" class="form-control">
                            <option value="">click to select</option>
                            @foreach ($makes as $item)
                                <option value="{{ $item->id }}">{{ $item->car_make_name }}</option>
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
                            <input type="text" name="car_make_model" class="form-control" value="{{ old('car_make_model') }}"
                                required style="text-transform: uppercase; letter-spacing:2px;font-weight:800;">
                            @error('car_make_model')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 py-1">
                        <button type="submit" class="btn btn-primary mt-3">SUBMIT CAR MAKE MODEL</button>
                    </div>
                </div>


            </form>
        </div>
        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>List of all User Accounts</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped" id="example">
                            <thead>
                                <th>Car Make Category</th>
                                <th>Model Name Category</th>
                                <th>Date Created</th>
                                <th>Last  Update</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach ($models as $make)
                                    <tr>
                                        <td>{{ $make->carmakemodel->car_make_name }} </td>
                                        <td>{{ $make->car_make_model_name }}</td>
                                        <td>{{ $make->created_at->format('D, d/M/Y, h:i:s A') }}</td>
                                        <td>{{ $make->updated_at->format('D, d/M/Y, h:i:s A') }}</td>
                                        <td><a href="{{ url('admin/edit-car-make_model/' . $make->slug) }}"
                                                class="btn btn-primary">Edit</a></td>
                                        <td><a href="{{ url('admin/delete-car-make-model/' . $make->slug) }}"
                                                class="btn btn-danger">Delete</a></td>
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
