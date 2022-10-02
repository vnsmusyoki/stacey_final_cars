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
            <form action="{{ url('admin/upload-carmake') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Car Make</label>
                            <input type="text" name="car_make" class="form-control" value="{{ old('car_make') }}"
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
                                <th>Date Joined.</th>
                                <th>Last Account Update</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach ($makes as $make)
                                    <tr>
                                        <td>{{ $make->car_make_name }} </td>
                                        <td>{{ $make->created_at->format('D, d/M/Y, h:i:s A') }}</td>
                                        <td>{{ $make->updated_at->format('D, d/M/Y, h:i:s A') }}</td>
                                        <td><a href="{{ url('admin/edit-car-make/' . $make->slug) }}"
                                                class="btn btn-primary">Edit</a></td>
                                        <td><a href="{{ url('admin/delete-car-make/' . $make->slug) }}"
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
