<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil - Algerie telecome</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Hero Section */
        .hero-section {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url("{{ asset('admin_assets/images/brand/logo/61771.jpg') }}") no-repeat center center/cover; /* Corrected background path */
    color: white;
    text-align: center;
    padding: 0 2rem;
    position: relative;
}


        /* Overlay background */
        .hero-section::after {
            content: '';
            background: rgba(0, 0, 0, 0.3);  /* Dark overlay to improve text visibility */
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
        }

        /* Hero Content */
        .hero-content {
            z-index: 1;
            max-width: 800px;
            width: 100%;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            font-weight: 400;
            line-height: 1.5;
        }

        /* Buttons */
        .btn-custom {
            font-size: 1.1rem;
            padding: 0.75rem 2rem;
            margin: 0.5rem;
            border-radius: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            width: 200px;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        /* Custom Button Colors */
        .btn-login {
            background-color: #4e73df;
            border: none;
            color: white;
        }

        .btn-register {
            background-color: #6f42c1;
            border: none;
            color: white;
        }

        /* Media Queries for responsiveness */
        @media (max-width: 767px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.125rem;
            }

            .btn-custom {
                width: 180px;
                font-size: 1rem;
                padding: 0.6rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="hero-content">
            <!-- Logo Section -->
            <div class="mb-4">
                <img src="{{ asset('admin_assets/images/brand/logo/images.png') }}" class="mb-2" alt="Algerie Telecom Logo" style="max-width: 200px;">
            </div>

            <h1>Bienvenue chez<br> Algerie Telecome</h1>
            <p class="lead">Accédez à votre compte ou inscrivez-vous pour commencer.</p>
            <div class="d-grid gap-3 d-sm-flex justify-content-center">


                <a href="{{ route('choose-role') }}" class="btn btn-custom btn-login">Se connecter</a>
>>>>>>> c4f5a2e (Initial commit)
                <a href="{{ route('register') }}" class="btn btn-custom btn-register">S'inscrire</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
