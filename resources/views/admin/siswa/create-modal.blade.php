
<div class="modal fade" id="createSiswaModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Name Siswa</label>
                            <input type="text" class="form-control" id="inputName5" name="name"
                                value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="inputImage" class="form-label">Phone Siswa</label>
                            <input class="form-control" type="number" id="inputImage" name="phone"
                                value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="inputImage" class="form-label">Address Siswa</label>
                            <input class="form-control" type="text" id="inputImage" name="address"
                                value="{{ old('address') }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Siswa</button>
                </div>
            </form>
        </div>
    </div>
</div>