@extends('layouts.layout')
@section('title', 'Update   Car Details')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Uploading New Car</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">

                        <div class="form-group mb-0">
                            <div class="input-container icon-left position-relative">
                                <span class="input-icon icon-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-calendar">
                                        <rect x="3" y="4" width="18" height="18" rx="2"
                                            ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                </span>
                                <input type="text" class="form-control form-control-default date-ranger"
                                    name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                <span class="input-icon icon-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="action-btn">
                        <a href="{{ route('user.mycars') }}" class="btn btn-sm btn-primary btn-add">
                            <i class="la la-plus"></i> My Cars</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-12">
            <div class="card card-default  mb-4">
                <div class="card-header">
                    <h6>Provide the following details</h6>
                </div>
                <div class="card-body">
                    <div class="basic-form-wrappers">

                        <form action="{{  route('user.updatecar', $car->slug) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-basic">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Car Name</label>
                                            <input class="form-control form-control-lg" type="text" name="car_name"
                                                placeholder="Mazda" value="{{ $car->car_name  }}" min="1">
                                            @error('car_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Car Make</label>
                                            <select name="car_make" id="" class="form-control">
                                                <option value="">click to select</option>
                                                @foreach ($makes as $make)
                                                    <option value="{{ $make->id }}" {{ ($car->car_make_id==$make->id)?'selected': '' }}>{{ $make->car_make_name }}</option>
                                                @endforeach

                                            </select>
                                            @error('car_make')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Car Model</label>
                                            @php
                                                $models = App\Models\CarMakeModele::all();
                                            @endphp
                                            <select name="car_model" id="" class="form-control">
                                                <option value="">click to select</option>
                                                @foreach ($models as $item)
                                                    <option value="{{ $item->id }}" {{ ($car->car_make_model_id==$item->id)?'selected': '' }}>{{ $item->car_make_model_name }}</option>
                                                @endforeach

                                            </select>
                                            @error('car_model')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Transmission</label>
                                            <select name="transmission" id="" class="form-control">
                                                <option value="">click to select</option>
                                                <option value="Manual" {{ ($car->transmission=="Manual")?'selected': '' }}>Manual</option>
                                                <option value="Automatic" {{ ($car->transmission=="Automatic")?'selected': '' }}>Automatic</option>
                                            </select>
                                            @error('transmission')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Color</label>
                                            <input class="form-control form-control-lg" type="text" name="car_color"
                                                placeholder="black" value="{{ $car->car_color }}" >
                                            @error('car_color')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Fuel Type</label>
                                            <select name="fuel_type" id="" class="form-control">
                                                <option value="">click to select</option>
                                                <option value="Diesel" {{ ($car->fuel_type=="Diesel")? 'selected': '' }}>Diesel</option>
                                                <option value="Gas" {{ ($car->fuel_type=="Gas")? 'selected': '' }}>Gas</option>
                                            </select>
                                            @error('fuel_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Car Milleage</label>
                                            <input class="form-control form-control-lg" type="number" name="car_milleage"
                                                placeholder="2022" value="{{ $car->milleage }}" min="1">
                                            @error('car_milleage')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Car Year</label>
                                            <input class="form-control form-control-lg" type="number" name="car_year"
                                                placeholder="2022" value="{{ $car->car_year }}">
                                            @error('car_year')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Engine CC</label>
                                            <input class="form-control form-control-lg" type="number" name="car_engine"
                                                placeholder="2344" value="{{ $car->engine_cc }}">
                                            @error('car_engine')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Registration Number</label>
                                            <input class="form-control form-control-lg" type="text" name="registration_number"
                                                placeholder="KDE 911M" value="{{ $car->reg_number }}">
                                            @error('registration_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Car Photo <small>This field is optional</small></label>
                                            <input class="form-control form-control-lg" type="file" name="car_photo" placeholder=""
                                            >
                                            @error('car_photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Min Price</label>
                                            <input class="form-control form-control-lg" type="number" min="10000" name="min_price" placeholder=""
                                                value="{{ $car->min_price }}">
                                            @error('min_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>NO. of Passengers</label>
                                            <input class="form-control form-control-lg" type="number" min="1" name="no_passengers" placeholder=""
                                                value="{{ $car->no_passengers }}">
                                            @error('no_passengers')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Loading Capacity</label>
                                            <input class="form-control form-control-lg" type="number" min="1" name="loading_capacity" placeholder=""
                                                value="{{ $car->loading_capacity }}">
                                            @error('loading_capacity')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Engine Number</label>
                                            <input class="form-control form-control-lg" type="text" name="engine_number" placeholder=""
                                                value="{{ $car->engine_number }}">
                                            @error('engine_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Date of Registration</label>
                                            <input class="form-control form-control-lg" type="date" name="date_of_registration" placeholder=""
                                                value="{{ $car->date_of_registration }}">
                                            @error('date_of_registration')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>No of Previous Owners</label>
                                            <input class="form-control form-control-lg" type="number" min="0" name="no_of_previous_owners" placeholder=""
                                                value="{{ $car->no_of_previous_owners }}">
                                            @error('no_of_previous_owners')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Logbook ID</label>
                                            <input class="form-control form-control-lg" type="number" name="logbook_id" placeholder=""
                                                value="{{ $car->logbook_id }}">
                                            @error('logbook_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Scanned LogBook <small>This field is optional</small></label>
                                            <input class="form-control form-control-lg" type="file" name="logbook" placeholder=""
                                              >
                                            @error('logbook')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Bidding Time Expiry</label>
                                            <input class="form-control form-control-lg" type="datetime-local" name="bidding_time_expiry" placeholder=""
                                                value="{{ $car->bidding_time_expiry }}">
                                            @error('bidding_time_expiry')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Car Features</label>
                                            <textarea class="form-control form-control-lg" rows="5" cols="10" name="car_features"
                                                placeholder="Describe your vehicle features">{{ $car->features  }}</textarea>
                                            @error('car_features')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                        <div class="form-group mb-25">
                                            <label>Car Description</label>
                                            <textarea class="form-control form-control-lg" rows="5" cols="10" name="car_description"
                                                placeholder="Describe your vehicle here">{{ $car->car_description }}</textarea>
                                            @error('car_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-lg btn-primary btn-submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ends: .card -->

        </div>
        <!-- ends: .col-lg-6 -->
    </div>
@endsection
