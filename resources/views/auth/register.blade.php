@extends('layouts.auth')

@section('content')
<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
        <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
            <!-- Card -->
            <div class="card smooth-shadow-md">
                <!-- Card body -->
                <div class="card-body p-6">
                    <div class="mb-4">
                        <a href="">@include('layouts.partials.admin.logo')</a>
                        <p class="mb-6">Please enter your user information.</p>
                    </div>
                    <!-- Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Username -->
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <div class="position-relative">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" autocomplete="name" autofocus>
                                <span class="input-icon">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <div class="position-relative">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" autocomplete="email">
                                <span class="input-icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <div class="position-relative">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    autocomplete="new-password">
                                <span class="toggle-password" onclick="togglePassword()" aria-label="Toggle password visibility">
                                    <i class="fas fa-eye" id="toggleIcon"></i>
                                </span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <div class="position-relative">
                                <input id="password-confirm" type="password"
                                    class="form-control" name="password_confirmation"
                                    autocomplete="new-password">
                                <span class="toggle-password" onclick="toggleConfirmPassword()" aria-label="Toggle confirm password visibility">
                                    <i class="fas fa-eye" id="toggleConfirmIcon"></i>
                                </span>
                            </div>
                        </div>

                        <div>
                            <!-- Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="d-md-flex justify-content-between mt-4">
                                <div class="mb-2 mb-md-0">
                                    <a href="{{ route('login') }}" class="fs-5">Already member? Login</a>
                                </div>
                                <div>
                                    <a href="{{ route('password.request') }}" class="text-inherit fs-5">Forgot your password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for toggling password visibility -->
<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        if (!passwordField || !toggleIcon) {
            console.error("Password field or toggle icon not found");
            return;
        }

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }

    function toggleConfirmPassword() {
        const confirmPasswordField = document.getElementById('password-confirm');
        const toggleConfirmIcon = document.getElementById('toggleConfirmIcon');

        if (!confirmPasswordField || !toggleConfirmIcon) {
            console.error("Confirm password field or toggle icon not found");
            return;
        }

        if (confirmPasswordField.type === 'password') {
            confirmPasswordField.type = 'text';
            toggleConfirmIcon.classList.remove('fa-eye');
            toggleConfirmIcon.classList.add('fa-eye-slash');
        } else {
            confirmPasswordField.type = 'password';
            toggleConfirmIcon.classList.remove('fa-eye-slash');
            toggleConfirmIcon.classList.add('fa-eye');
        }
    }
</script>

<!-- Add custom styles for the floating icon -->
<style>
    .position-relative {
        position: relative;
    }

    .form-control {
        padding: 10px 40px 10px 15px; /* Add padding to the right for the icon */
        border-radius: 8px; /* Match the rounded corners of the original design */
        border: 1px solid #e0e0e0; /* Lighter border to match the original */
        background-color: #f8faff; /* Light background to match the original */
        font-size: 14px; /* Match the font size of the original */
    }

    .form-control:focus {
        border-color: #4a00e0; /* Purple border on focus to match the theme */
        box-shadow: 0 0 5px rgba(74, 0, 224, 0.2); /* Subtle shadow on focus */
        outline: none;
    }

    .toggle-password {
        position: absolute;
        right: 15px; /* Position the icon inside the input field */
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        background: none; /* Remove any background */
        border: none; /* Remove any border */
        padding: 0; /* Remove padding */
    }

    .toggle-password i {
        color: #a0a0a0; /* Gray color to match the original icon */
        font-size: 14px; /* Smaller icon size to match the original */
        transition: color 0.2s ease; /* Smooth color transition on hover */
    }

    .toggle-password:hover i {
        color: #4a00e0; /* Purple color on hover to match the theme */
    }

    .input-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #a0a0a0;
        font-size: 14px;
    }

    .btn-primary {
        background-color: #4a00e0; /* Match the purple color of the original design */
        border-color: #4a00e0;
        border-radius: 8px; /* Match the rounded corners */
        padding: 10px;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #3a00b3; /* Slightly darker purple on hover */
        border-color: #3a00b3;
    }
</style>
@endsection