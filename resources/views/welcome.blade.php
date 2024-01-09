<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        nav {
            background-color: #567051;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav li {
            position: relative;
        }

        nav a {
            display: block;
            padding: 15px 20px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        nav .hover:hover {
            background-color: #2a4621;
        }

        /* Dropdown styles */
        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #2A4B1E;
            box-shadow: 0 2px 5px rgba(108, 145, 99, 0.2);
            z-index: 1;
        }

        .dropdown a {
            white-space: nowrap;
        }

        nav li:hover .dropdown {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img height="38"
                    src="{{ asset('log.png') }}" width="38"></a>
            <button class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="hover" href="#">PONPES</a>
                    </li>
                    <li class="nav-item">
                        <a class="hover" href="#">TENTANG KAMI</a>
                        <div class="dropdown">
                            {{-- @foreach (App\Models\Fakultas::get() as $item)
                                <a class="hover" href="#">{{ $item->nama_fakultas }}</a>
                            @endforeach --}}
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="hover" href="#">ASRAMA</a>
                        <div class="dropdown">
                            {{-- @foreach (App\Models\ProgramStudy::get() as $item)
                                <a class="hover" href="#">{{ $item->nama_program }}</a>
                            @endforeach --}}
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="hover" href="#">PSB</a>
                        <div class="dropdown">
                            <a class="hover" href="">SANTRI BARU</a>
                            <a class="hover" href="#jalur-pendaftaran">BIAYA PENDAFTARAN</a>
                            <a class="hover" href="#alur-pendaftaran">ALUR PENDAFTARAN</a>
                                {{-- @if ($setting->count() === 0)
                                <a class="hover" href="/biaya-pendaftaran">
                                    Biaya pendafataran
                                </a>
                                @elseif ($pdf->biaya_pendaftaran === 0)
                                    <a class="hover" href="/biaya-pendaftaran">
                                        Biaya pendafataran
                                    </a>
                                @else
                                    <a aria-current="page" class="hover" href="/biaya-pendaftaran" target="_blank">
                                        Biaya pendafataran
                                    </a>
                                @endif --}}
                            <a class="hover" href="#faq">FAQ</a>
                        </div>
                    </li>


                </ul>

                <ul class="navbar-nav ">

                    @guest
                        <li>
                            <a class="hover" href="/login-maba">Login</a>
                        </li>
                        <li>
                            <a class="hover" href="/register-maba">Register</a>
                        </li>
                    @else
                        <li>
                            <a href="#"><img alt="profil" class="rounded-circle img-fluid p-0"
                                    src="{{ asset('iaida/profile.jpg') }}" width="30"></a>
                            <div class="dropdown">
                                {{-- @if (Auth::user()->role === 'maba')
                                    <a class="hover" href="/dashboard-maba">My Profile</a>
                                    <a class="hover" data-bs-target="#modalMaba" data-bs-toggle="modal" href="#">Log
                                        Out</a>
                                @elseif (Auth::user()->role === 'super_admin')
                                    <a class="hover" href="/dashboard-panitia">Dashboard</a>
                                    <a class="hover" href="#" data-bs-toggle="modal" data-bs-target="#modalAdmin">Log Out</a>

                                @endif --}}
                            </div>
                        </li>
                        <!-- logout Modal maba -->
                        <div class="modal fade" id="modalMaba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                            type="button"></button>
                                    </div>
                                    <div class="modal-body">
                                        Anda Yakin Mau Keluar?
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-dismiss="modal" type="button">Cencel</button>
                                        <a class="btn btn-danger" href="#">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Logout Modal admin-->
                        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="modalAdmin"
                            tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                            type="button"></button>
                                    </div>
                                    <div class="modal-body">
                                        Anda Yakin Mau Keluar?
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-dismiss="modal"
                                            type="button">Cencel</button>
                                        <a class="btn btn-danger" href="#">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endguest
                </ul>

            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
