@extends('layouts.main')
@section('content')
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
    .fw-bold {
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
    }
</style>
<div class="hero-image">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-md-8 py-5 text-center">
                <div>
                    <h1 class="fade-text fw-bold">Selamat Datang</h1>
                    <h2 class="fade-text fw-bold">Ponpes Darussalam Kanak-Kanak</h2>
                    <p class="fade-text">Blokagung, Karangdoro, Tegalsari, Banyuwangi</p>
                </div>

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
<button id="scrollToTopBtn" class="scroll-to-top-btn">&#8593;</button>
{{-- footer --}}
<footer class="pesantren-footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="{{ asset('img/log.png') }}" alt="Logo Pesantren">
        </div>
        <div class="footer-info">
            <h3>Poncil Darussalam Blokagung</h3>
            <p>Jl. PP Darussalam Blokagung, Karangdoro, Tegalsari, Banyuwngi</p>
            <p>Telepon: (123) 456-7890</p>
            <p>Email: poncil@darussalam.com</p>
        </div>
    </div>
</footer>
@endsection
@push('scroll')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var scrollToTopBtn = document.getElementById("scrollToTopBtn");

            // Show/hide the scroll-to-top button based on scroll position
            window.addEventListener("scroll", function() {
                if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }
            });

            // Scroll to the top when the button is clicked
            scrollToTopBtn.addEventListener("click", function() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            });
        });

    </script>
@endpush
