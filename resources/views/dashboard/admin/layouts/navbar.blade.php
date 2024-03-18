<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar logout -->
      <li class="nav-item ">
        <div class="dropdown">
            <a href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Selamat Datang, {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
      </li>

    </ul>
</nav>
