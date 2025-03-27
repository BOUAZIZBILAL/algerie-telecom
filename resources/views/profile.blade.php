@extends('layouts.auth')

@section('content')
<div class="d-flex">
    <!-- Sidebar -->
    <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('profile') }}">
                        <i class="fas fa-file-alt"></i> Pages
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-database"></i> Data center
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-history"></i> History
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i> System Alerts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-book"></i> Rapports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-tasks"></i> To-Do list
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
        <div class="welcome-section">
            <h1 class="h2">Profile</h1>
        </div>

        <!-- Profile Content -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Profile</h5>
                        <div class="mb-3">
                            <label class="form-label"><strong>Name:</strong></label>
                            <p>{{ $user->name }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Email:</strong></label>
                            <p>{{ $user->email }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Joined:</strong></label>
                            <p>{{ $user->created_at->format('d M Y') }}</p>
                        </div>
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection