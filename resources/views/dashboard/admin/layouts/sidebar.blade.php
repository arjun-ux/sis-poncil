<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" id="toggle-btn" type="button">
            <img src="{{ asset('img/log.png') }}" alt="logo" width="40px" style="margin-left: 0">
        </button>
        <div class="sidebar-logo">
            <a href="#">COMPANY</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="{{ route('dashmin') }}" class="sidebar-link">
                <i class="lni lni-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('data_saba_all') }}" class="sidebar-link">
                <i class="lni lni-consulting"></i>
                <span>Data Santri</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-users"></i>
                <span>User</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">List User</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Register User</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
