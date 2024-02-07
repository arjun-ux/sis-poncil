<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
      <div class="navbar-header" data-logobg="skin5">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <a class="navbar-brand" href="index.html">
          <!-- Logo icon -->
          <b class="logo-icon ps-2">
            <img
              src="{{ asset('img/log.png') }}"
              alt="homepage"
              class="light-logo"
              width="25"/>
          </b>
          <!--End Logo icon -->
          <!-- Logo text -->
          <span class="logo-text ms-2">
            <!-- dark Logo text -->
            <img
              src="../assets/images/logo-text.png"
              alt="homepage"
              class="light-logo"
            />
          </span>
          <!-- Logo icon -->
          <!-- <b class="logo-icon"> -->
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

          <!-- </b> -->
          <!--End Logo icon -->
        </a>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Toggle which is visible on mobile only -->
        <!-- ============================================================== -->
        <a
          class="nav-toggler waves-effect waves-light d-block d-md-none"
          href="javascript:void(0)"
          ><i class="ti-menu ti-close"></i
        ></a>
      </div>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <div
        class="navbar-collapse collapse"
        id="navbarSupportedContent"
        data-navbarbg="skin5">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-start me-auto">
          <li class="nav-item d-none d-lg-block">
            <a
              class="nav-link sidebartoggler waves-effect waves-light"
              href="javascript:void(0)"
              data-sidebartype="mini-sidebar"
              ><i class="mdi mdi-menu font-24"></i
            ></a>
          </li>
        </ul>
        <!-- ============================================================== -->
        <!-- Right side toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-end">
          <li class="nav-item dropdown">
            <a class="
                nav-link
                dropdown-toggle
                text-muted
                waves-effect waves-dark
                pro-pic
              "
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              <img
                src="../assets/images/users/1.jpg"
                alt="user"
                class="rounded-circle"
                width="31"/>
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end user-dd animated"
              aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="javascript:void(0)"
                ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
              <a class="dropdown-item" href="javascript:void(0)"
                ><i class="mdi mdi-settings me-1 ms-1"></i> Account
                Setting</a>
              <div class="dropdown-divider"></div>
              <!-- Button trigger modal -->
              <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item" href="javascript:void(0)"
                ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
            </ul>
          </li>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
        </ul>
      </div>
    </nav>
</header>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Anda Yakin Ingin Keluar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
      </div>
    </div>
  </div>
</div>
