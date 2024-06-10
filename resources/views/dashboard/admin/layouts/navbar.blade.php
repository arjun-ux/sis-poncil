<nav class="navbar navbar-expand px-4 py-3">
    <button class="toggle-btn" id="sidebarCollapse">&#9776;</button>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    Selamat Datang, <strong>{{ Auth::user()->name }}</strong>
                    <img class="avatar img-fluid"
                        src="{{ asset('img/pp.png') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-end border-0"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" id="logout" href="#">
                        <i class="lni lni-power-switch"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
@push('script')
    <script>
        $('#logout').click(function(e){
            e.preventDefault();
            Swal.fire({
                icon: 'warning',
                title: 'Apakah Anda Yakin Keluar?',
                toast: true,
                position: 'top',
                showCancelButton: true,
            }).then((value)=>{
                if(value.isConfirmed){
                    logout();
                }
            });
        });
        function logout(){
            $.ajax({
                url: '/logout',
                type: 'GET',
                success: function(res){
                    Swal.fire({
                        icon: 'success',
                        title: res.message,
                        toast: true,
                        showConfirmButton: false,
                        timer: 1500,
                        position: 'top-end',
                        timerProgressBar: true,
                    }).then(()=>{
                        location.reload();
                    });
                }
            });
        }
    </script>
@endpush
