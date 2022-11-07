@extends('layouts.layout')
@section('title', 'Admin Secure Account')

@section('content')
    <div class="row">

        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>Approve/Decline car Uploaded</h6>
                </div>
                <div class="card-body">
                    <div class="basic-form-wrappers">
                        <form action="{{ route('admin.savejudgement', $car-> slug) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="">Final Judgement</label>
                                <select name="car_judgement" id="" class="form-control">
                                    <option value="">click to select</option>
                                    <option value="Overpricing">Overpricing</option>
                                    <option value="Mismatching Information">Mismatching Information</option>
                                    <option value="Approved">Approved</option>
                                </select>
                                @error('car_judgement')
                                    <strong><span class="text-danger">{{ $message }}</span></strong>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Briefly Describe</label>
                                <input type="text" name="brief_description" class="form-control"
                                    placeholder="Write something here...">
                                @error('brief_description')
                                    <strong><span class="text-danger">{{ $message }}</span></strong>
                                @enderror
                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit">Submit Data</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <!-- ends: .col-lg-6 -->
    </div>


@endsection
