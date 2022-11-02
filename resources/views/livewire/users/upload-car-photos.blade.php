<div>
    @if ($car->status == 'pending')
        <form action="" wire:submit.prevent="submitattachment" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
                    <div class="form-group mb-25">
                        <label>Car Photo</label>
                        <input class="form-control form-control-lg" type="file" wire:model="file_attachment"
                            placeholder="" value="{{ old('file_attachment') }}">
                        @error('file_attachment')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-lg btn-primary btn-submit mt-4">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    @endif
    <div class="row">
        <div class="col-12">
            @if ($message = Session::get('errormessage'))
                <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($message = Session::get('message'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="example">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Image</th>
                            <th>FIle Name</th>
                            <th class="text-nowrap">Date Uploaded</th>
                            <th>File Size</th>
                            @if ($car->car_owner_id == Auth::user()->id)
                                @if ($car->status == 'pending')
                                    <th>Action</th>
                                @endif

                            @endif

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($attachments as $key=>$item)
                            <tr class="text-sm">
                                <td>{{ ++$key }}</td>
                                <td><img src="{{ asset('storage/cars/' . $item->image_name) }}" alt=""
                                        style="height:60px;width:120px;"></td>
                                <td>{{ $item->image_name }}</td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>{{ $item->file_size }} MB</td>
                                @if ($car->status == 'sold')
                                    @if ($car->car_owner_id == Auth::user()->id)
                                        <td>
                                            <button class="btn btn-danger"
                                                wire:click="removepic({{ $item->id }})">Remove</button>
                                        </td>
                                    @endif
                                @endif



                            </tr>

                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Attachments Found</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                <div class="d-flex justify-content-end mt-2 mr-1">
                    {{-- {{ $attachments->links() }} --}}
                </div>
            </div>
        </div>
    </div>

</div>
