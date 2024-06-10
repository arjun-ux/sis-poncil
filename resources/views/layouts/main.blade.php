<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/loader.css') }}">
</head>
<body>
    <div class="loader-container" id="loader-container" style="display: none"></div>
    <div id="loader" class="loader"></div>
    @include('layouts.navbar')
    @yield('content')
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scroll')
    <script>
        // loader when location reload
        window.onbeforeunload = function() {
            isLoading = true;
            document.getElementById('loader').style.display = 'block';
            document.getElementById('loader-container').style.display = 'block';
        };
        // Hide loader when page is loaded
        window.onload = function() {
            document.getElementById('loader').style.display = 'none';
            document.getElementById('loader-container').style.display = 'none';
        };
        // navigation history or back to page before
        window.addEventListener('pageshow', function(event) {
            // Cek apakah event.persisted adalah true, menunjukkan bahwa halaman dimuat kembali dari cache browser
            if (event.persisted) {
                // Tampilkan loader atau lakukan tindakan lain sesuai kebutuhan Anda
                console.log('kembali ke halaman sebelum');
                document.getElementById('loader').style.display = 'none';
                document.getElementById('loader-container').style.display = 'none';
            }
        });
    </script>
</body>
</html>
