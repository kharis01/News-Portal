@extends('admin.parent')

@section('content')

<form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    

    <div class="modal-body">
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="inputName5" class="form-label">Name Siswa</label>
                <input type="text" class="form-control" id="inputName5" name="name" value="{{ $siswa->name }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="inputImage" class="form-label">Phone Siswa</label>
                <input class="form-control" type="number" id="inputImage" name="phone" value="{{ $siswa->phone }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="inputImage" class="form-label">Address Siswa</label>
                <textarea name="address" id="" cols="30" rows="10" name="address">{{ $siswa->address }}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Siswa</button>
    </div>
</form>

@endsection