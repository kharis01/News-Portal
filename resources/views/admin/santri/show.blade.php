@extends('admin.parent')

@section('content')

<form action="{{ route('Santri.show', $santri->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    

    <div class="modal-body">
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="inputName5" class="form-label">Name Santri</label>
                <input type="text" class="form-control" id="inputName5" name="name" value="{{ $santri->name }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="inputImage" class="form-label">Phone Santri</label>
                <input class="form-control" type="number" id="inputImage" name="phone" value="{{ $santri->phone }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="inputImage" class="form-label">Address Santri</label>
                {{-- <textarea name="address" id="" cols="30" rows="10" name="address">{{ $santri->address }}</textarea> --}}
                <input type="text" class="form-control" id="inputName5" name="address" value="{{ $santri->address }}">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Santri</button>
    </div>
</form>

@endsection