<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/"><img height="38"
                src="{{ asset('img/log.png') }}" width="38"></a>
        <button class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
                @guest
                    <li>
                        <a class="hover" href="/login">Login</a>
                    </li>
                    <li>
                        <a class="hover" href="/register-saba">Register</a>
                    </li>
                @else
                    <li>
                        <a class="hover" href="#"><img src="{{ asset('img/pp.png') }}" width="30px" alt="pp" class="rounded-circle img-fluid p-0"></a>
                        <div class="dropdown">
                            <a class="hover" href="/dashba">My Profile</a>
                            <a class="hover" data-bs-target="#modalMaba" data-bs-toggle="modal" href="#">Log
                                Out</a>

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
                @endguest
            </ul>
        </div>
    </div>
</nav>
