<!DOCTYPE html>
<html lang="jv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SrawungSpace') | Papan Srawung Budaya Jawa</title>
    <meta name="description" content="SrawungSpace, papan kanggo srawung bareng, nguri-uri budaya Jawa, lan ngraketake paseduluran.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/srawung.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sw-navbar sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Srawung<span class="text-warning">Space</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Ngarep</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Babagan Kita</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('events.index') }}">Acara</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('community') }}">Kagiyatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="sw-footer text-center py-4">
        <div class="container">
            <p class="fw-semibold mb-1">SrawungSpace</p>
            <p class="mb-1 small">Papan kanggo crita lan karya, nguri-uri budaya kanthi guyub rukun.</p>
            <p class="mb-0 small">&copy; {{ date('Y') }} SrawungSpace. Sedaya hak dipun simpen.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
