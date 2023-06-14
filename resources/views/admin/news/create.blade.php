@extends('admin.parent')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">News Create</h5>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif

            <div class="card p-3">
                <form class="row g-3" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <!-- Multi Columns Form -->
                    <form class="col-md-12">
                        <div class="col-md-12">
                            <label for="inputNewsName" class="form-label">Name News</label>
                            <input type="text" class="form-control" id="InputNewsName" value="{{ old('name') }}"
                                name="title" required>
                        </div>

                        <div class="col-md-12">
                            <label for="inputImageNews" class="form-label">News image</label>
                            <input type="file" class="form-control" id="inputImageNews" value="{{ old('image') }}"
                                name="image" required>
                        </div>

                        <div class="col-md-12">
                            <label for="inputCategoryNews" class="form-label">Category News</label>
                            <select id="inputCategoryNews" class="form-select" name="category_id">
                                @foreach ($category as $row)
                                    <option selected>Choose...</option>
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Description News</label>  
                            <textarea id="editor" name="description"></textarea>
                            <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#editor'))
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                    <!-- End Multi Columns Form -->
                </form>
            </div>

        </div>
    </div>
@endsection
