<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/"><img height="38"
                src="{{ asset('img/log.png') }}" width="38"></a>
        <button class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="hover" href="#kegiatan-pesantren">PONPES</a>
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
                        {{-- <a class="hover" href="{{ route('santri.list') }}">SANTRI BARU</a> --}}
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
                        <a class="hover" href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a class="hover" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li>
                        <a class="hover" href="#"><img src="{{ asset('img/pp.png') }}" alt="profil" class="rounded-circle img-fluid p-0"
                                src="{{ asset('iaida/profile.jpg') }}" width="30"></a>
                        <div class="dropdown">
                            @if (Auth::user()->role === 'saba')
                                <a class="hover" href="/dashba">My Profile</a>
                                <a class="hover" data-bs-target="#modalMaba" data-bs-toggle="modal" href="#">Log
                                    Out</a>
                            @elseif (Auth::user()->role === 'admin')
                                <a class="hover" href="/dashmin">Dashboard</a>
                                <a class="hover" href="#" data-bs-toggle="modal" data-bs-target="#modalAdmin">Log Out</a>

                            @endif
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
                                    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
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
                                    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endguest
            </ul>
        </div>
    </div>
</nav>
