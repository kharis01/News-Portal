@extends('admin.parent')

@section('content')
    <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        

        <div class="modal-body">
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputName5" class="form-label">Name Siswa</label>
                    <input type="text" class="form-control" id="inputName5" name="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputImage" class="form-label">Phone Siswa</label>
                    <input class="form-control" type="number" id="inputImage" name="phone" value="{{ old('phone') }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputImage" class="form-label">Address Siswa</label>
                    <input type="text" class="form-control" id="inputName5" name="address" value="{{ old('name') }}">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Siswa</button>
        </div>
    </form>
@endsection
