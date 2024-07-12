<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<header class="bg-dark text-light fw-bolder fs-4 d-flex justify-content-between align-items-stretch ">
    <a class="text-decoration-none text-light" href={{ route('homepage') }}>
        <p class="opacity-50">
            Timber<span class="fw-light">Tech</span>
        </p>
    </a>
</header>
<body>
    <div class="container-fluid">
        @yield('content')
    </div>
    <style>
        .josefin { 
            font-family: "Josefin Sans", sans-serif !important;
            font-weight: bold
        }
    </style>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    @stack('scripts')
</body>
</html>