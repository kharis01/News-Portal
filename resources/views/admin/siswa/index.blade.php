@extends('admin.parent')

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Siswa</h5>
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

                <a href="{{ route('siswa.create') }}" class="btn btn-primary">
                    Add Siswa
                </a>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#createSiswaModal">
                    <i class="ri-add-line"></i><span> Add Siswa Modal</span></i>
                </button>
                @include('admin.siswa.create-modal')

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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $row)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <th>{{ $row->name }}</th>
                                    <th>{{ $row->phone }}</th>
                                    <th>{{ $row->address }}</th>
                                    <th>
                                        <a href="{{ route('siswa.show', $row->id) }}" class="btn btn-primary">Show</a>

                                        <a href="{{ route('siswa.edit', $row->id) }}" class="btn btn-warning">Edit</a>

                                        <form action="{{ route('siswa.destroy', $row->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
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
