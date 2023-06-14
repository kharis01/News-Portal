@extends('admin.parent')

@section('content')
    <form action="{{ route('Santri.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        

        <div class="modal-body">
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputName5" class="form-label">Name Santri</label>
                    <input type="text" class="form-control" id="inputName5" name="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputImage" class="form-label">Phone Santri</label>
                    <input class="form-control" type="number" id="inputImage" name="phone" value="{{ old('phone') }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputName5" class="form-label">Address Santri</label>
                    <input type="text" class="form-control" id="inputName5" name="address" value="{{ old('name') }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputName5" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputName5" name="city" value="{{ old('name') }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputName5" class="form-label">Date</label>
                    <input type="date" class="form-control" id="inputName5" name="date" value="{{ old('name') }}">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            {{-- <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Close</button> --}}
            <button type="submit" class="btn btn-outline-primary w-100">Add santri</button>
        </div>
    </form>
@endsection
