@extends('layouts.layout')
@section('title', 'Admin Secure Account')

@section('content')
    <div class="row">

        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>Account Settings</h6>
                </div>
                <div class="card-body">
                    <div class="basic-form-wrappers">
                        <form action="{{ url('admin/update-password') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Current Password</label>
                                <input type="password" name="current_password" class="form-control"
                                    placeholder="Current  Password">
                                @error('current_password')
                                    <strong><span class="text-danger">{{ $message }}</span></strong>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="New Password">
                                @error('password')
                                    <strong><span class="text-danger">{{ $message }}</span></strong>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm New Password">
                                @error('password_confirmation')
                                    <strong><span class="text-danger">{{ $message }}</span></strong>
                                @enderror
                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit"> Update Password</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <!-- ends: .col-lg-6 -->
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>Account Email</h6>
                </div>
                <div class="card-body">
                    <div class="basic-form-wrappers">
                        <form action="{{ url('admin/update-email') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Current Email</label>
                                <input type="email" name="current_email" class="form-control"
                                    placeholder="Current  Email">
                                @error('current_email')
                                    <strong><span class="text-danger">{{ $message }}</span></strong>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">New Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="New Email Address">
                                @error('email')
                                    <strong><span class="text-danger">{{ $message }}</span></strong>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Confirm Email</label>
                                <input type="email" name="confirm_email" class="form-control"
                                    placeholder="Confirm New Email Address">
                                @error('confirm_email')
                                    <strong><span class="text-danger">{{ $message }}</span></strong>
                                @enderror
                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit"> Update Email Address</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <!-- ends: .col-lg-6 -->
    </div>
@endsection
