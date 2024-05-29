<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scroll')
</body>
</html>
