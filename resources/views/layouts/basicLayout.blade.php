<!DOCTYPE html>
<html lang="en">
@include('components.htmlHead')
@include('components.htmlNav')
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