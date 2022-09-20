<div>
    <form action="" wire:submit.prevent="submitattachment" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
                <div class="form-group mb-25">
                    <label>Car Photo</label>
                    <input class="form-control form-control-lg" type="file" wire:model="file_attachment" placeholder=""
                        value="{{ old('file_attachment') }}">
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
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>FIle Name</th>
                                <th class="text-nowrap">Date Uploaded</th>

                                <th>File Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($attachments as $key=>$item)
                                <tr class="text-sm">
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->image_name }}</td>
                                    <td>{{ $item->created_at->format('d M Y') }}</td>
                                    <td>{{ $item->file_size }} MB</td>

                                </tr>

                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No Attachments Found</td>
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
    </form>
</div>
