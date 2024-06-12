<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<header class="bg-dark text-light fw-bolder fs-4 d-flex justify-content-between align-items-stretch ">
    <a class="text-decoration-none text-light" href={{ route('homepage') }}>
        <p class="opacity-50">
            Timber<span class="fw-light">Tech</span>
        </p>
    </a>
    <p class="opacity-50 fs-5 fw-light josefin">
        -Soluciones tecnológicas
    </p>
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
</body>
</html>