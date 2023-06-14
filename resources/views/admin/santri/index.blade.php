@extends('admin.parent')

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Santri</h5>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item active"><a href="{{ route('category.index') }}">Category</a></li>
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

        <div class="container d-flex justify-content-end">
            <!-- Create Modal -->

            <a href="{{ route('Santri.create') }}" class="btn btn-primary w-100">
                Add Santri
            </a>

            <!-- End Create Modal-->
        </div>

        <div class="card container mt-3">
            <!-- Table with stripped rows -->
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">address</th>
                            <th scope="col">Action</th>
                            <th scope="col">City</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($santri as $row)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $row->name }}</th>
                                <th>{{ $row->phone }}</th>
                                <th>{{ $row->address }}</th>
                                <th>{{ $row->city }}</th>
                                <th>{{ $row->date }}</th>
                                <th>
                                    <a href="{{ route('siswa.show', $row->id) }}" class="btn btn-primary">Show</a>

                                    <a href="{{ route('Santri.edit', $row->id) }}" class="btn btn-warning w-10">Edit</a>

                                    <form action="{{ route('Santri.destroy', $row->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger w-50" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table with stripped rows -->
        </div>

    </div>
</div>

@endsection