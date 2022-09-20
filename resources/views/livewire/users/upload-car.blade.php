<div>
    <form wire:submit.prevent="uploadcar" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="form-basic">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                    <div class="form-group mb-25">
                        <label>Car Make</label>
                        <select wire:model="car_make" id="" class="form-control">
                            <option value="">click to select</option>
                            @foreach ($makes as $make)
                                <option value="{{ $make->id }}">{{ $make->car_make_name }}</option>
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
                            $models = App\Models\CarMakeModele::where('car_make_id', $car_make)->get();
                        @endphp
                        <select wire:model="car_model" id="" class="form-control">
                            <option value="">click to select</option>
                            @foreach ($models as $item)
                                <option value="{{ $item->id }}">{{ $item->car_make_model_name }}</option>
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
                        <select wire:model="transmission" id="" class="form-control">
                            <option value="">click to select</option>
                            <option value="Manual">Manual</option>
                            <option value="Automatic">Automatic</option>
                        </select>
                        @error('transmission')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                    <div class="form-group mb-25">
                        <label>Car Year</label>
                        <input class="form-control form-control-lg" type="number" wire:model="car_year"
                            placeholder="2022" value="{{ old('car_year') }}">
                        @error('car_year')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                    <div class="form-group mb-25">
                        <label>Engine CC</label>
                        <input class="form-control form-control-lg" type="number" wire:model="car_engine"
                            placeholder="2344" value="{{ old('car_engine') }}">
                        @error('car_engine')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                    <div class="form-group mb-25">
                        <label>Registration Number</label>
                        <input class="form-control form-control-lg" type="text" wire:model="registration_number"
                            placeholder="KDE 911M" value="{{ old('registration_number') }}">
                        @error('registration_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="form-group mb-25">
                        <label>Car Photo</label>
                        <input class="form-control form-control-lg" type="file" wire:model="car_photo" placeholder=""
                            value="{{ old('car_photo') }}">
                        @error('car_photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="form-group mb-25">
                        <label>Car Description</label>
                        <textarea class="form-control form-control-lg" rows="5" cols="10" wire:model="car_description"
                            placeholder="Describe your vehicle here">{{ old('car_description') }}</textarea>
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
