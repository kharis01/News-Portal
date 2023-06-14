<div class="modal fade" id="editSliderModal{{ $row->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Slider Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('slider.edit', $row->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Name Slider</label>
                        <input type="file" class="form-control" id="inputName5" name="image"
                            value="{{ $row->name }}">
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label for="inputImage" class="form-label">link Slider</label>
                            <input class="form-control" type="text" id="inputImage" name="url">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>