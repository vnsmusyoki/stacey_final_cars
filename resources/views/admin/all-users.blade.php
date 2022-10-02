@extends('layouts.layout')
@section('title', 'All Users ')

@section('content')
    <div cl
ass="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">All Users </h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">

                    </div>

                </div>
            </div>

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

        <!-- ends: .col-lg-6 -->
    </div>
@endsection
