<!-- partial:./partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas h-100" id="sidebar">
    <ul class="nav position-fixed" id="sidebar-cont">
        <div class="logo">
            <a href="/">
                <img src="{{ url('assets/images/logo-golkar.png') }}" alt="logo" width="100%">
            </a>
        </div>
        <li class="nav-item sidebar-category">
            <p>Menu</p>
            <span></span>
        </li>

        <li class="nav-item mb-2">
            <a class="nav-link" href="">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->roles == 'ADMIN')
            <li class="nav-item mb-2">
                <a class="nav-link" href="">
                    <i class="mdi mdi-chart-pie menu-icon"></i>
                    <span class="menu-title">Quick Count</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="">
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                    <span class="menu-title">Data Suara</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="">
                    <i class="mdi mdi-eye menu-icon"></i>
                    <span class="menu-title">Data Saksi</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="">
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="">
                    <i class="mdi mdi-file menu-icon"></i>
                    <span class="menu-title">Report</span>
                </a>
            </li>
        @endif
    </ul>
</nav>
<!-- partial -->
