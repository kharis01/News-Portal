@extends('admin.parent')

@section('content')
    <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="https://ui-avatars.com/api/?name=Admin" alt="Profile" class="rounded-circle">
            <h2>Admin</h2>
            <h3>Web Designer</h3>
            <div class="social-links mt-2">
                {{-- <a href="#" class="reddit"><i class="bi bi-reddit"></i></a> --}}
                <a target="_blank" href="https://github.com/kharis01" class="github"><i class="bi bi-github"></i></a>
                {{-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> --}}
                <a target="_blank"  href="https://www.linkedin.com/in/khariz-ghazwan-914201257/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
@endsection
