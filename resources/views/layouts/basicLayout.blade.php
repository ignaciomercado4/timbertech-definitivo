<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<header class="bg-dark text-light fw-bolder fs-4 d-flex justify-content-between align-items-stretch ">
    <a class="text-decoration-none text-light" href={{ route('homepage') }}>
        <p class="opacity-50">
            Timber<span class="fw-light">Tech</span>
        </p>
    </a>
    <p class="opacity-50 fs-5 fw-light">
        -Soluciones tecnológicas
    </p>
</header>
<body>
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
</html>