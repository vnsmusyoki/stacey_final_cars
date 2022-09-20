@extends('layouts.layout')
@section('title', 'Upload New Car')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Car Details</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">


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

                    </div>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <div class="col-lg-7">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>Upload More Photos?</h6>
                </div>
                <div class="card-body">
                    <div class="basic-form-wrappers">
                                @livewire('users.upload-car-photos', ['carslug' => $slug])
                    </div>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <!-- ends: .col-lg-6 -->
    </div>
@endsection
