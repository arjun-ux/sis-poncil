<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <style>
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .hero-image {
            background-image: url('img/home.jpg');
            height: 88vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
        .hero-image::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 40%;
            background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,1));
            pointer-events: none;
        }





    </style>
</head>
<body>
    @include('layouts.navbar')
    <div class="hero-image">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-md-8 py-5 text-center">
                    <h1>Selamat Datang</h1>
                    <h2>Ponpes Darussalam Kanak-Kanak</h2>
                    <p>Blokagung, Karangdoro, Tegalsari, Banyuwangi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 id="kegiatan-pesantren" class="text-center">Kegiatan Pesantren</h2>
        <div class="row">
            <div class="col-md-6 py-5 ">
                <div class="fade-left-animation text-center">
                    <img src="{{ asset('img/1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 py-5">
                <h3>Pengajian Kitab</h3>
                <p>Pengajian kitab kuning merupakan suatu wadah pembelajaran
                    agama Islam yang berfokus pada studi kitab-kitab klasik Islam
                    yang telah diwariskan dari generasi ke generasi. Kegiatan ini
                    biasanya dilakukan di lingkungan pondok pesantren, masjid, atau
                    lembaga pendidikan Islam lainnya. Peserta pengajian biasanya terdiri
                     dari para santri, masyarakat umum, dan para pencari ilmu agama.</p>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <footer class="pesantren-footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="logo-pesantren.png" alt="Logo Pesantren">
            </div>
            <div class="footer-info">
                <h3>Yayasan Pesantren Al-Hidayah</h3>
                <p>Jalan Pesantren No. 123, Desa Pesantren, Kecamatan Pesantren</p>
                <p>Telepon: (123) 456-7890</p>
                <p>Email: info@yayasanpesantren.com</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
