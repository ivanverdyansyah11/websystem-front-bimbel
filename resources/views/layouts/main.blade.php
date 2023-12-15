<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Page</title>

    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- END STYLE --}}
</head>
<body>

    <div class="container-fluid">
        <div class="row p-0">
            @include('components.sidebar')
            @yield('content')
        </div>
    </div>
    
    {{-- SCRIPT --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @stack('js')
    {{-- END SCRIPT --}}
</body>
</html>