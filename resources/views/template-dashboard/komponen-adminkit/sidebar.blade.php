<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="#">
            <span class="align-middle">Mawar Mekar</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/dashboard') }}">
                    <i class="fas fa-sliders-h align-middle"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('cabang') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/cabang') }}">
                    <i class="fas fa-network-wired align-middle"></i> <span class="align-middle">Cabang</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('unit') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/unit') }}">
                    <i class="fas fa-project-diagram align-middle"></i> <span class="align-middle">Unit Latihan</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('ukt') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/ukt') }}">
                    <i class="far fa-clipboard align-middle"></i> <span class="align-middle">UKT</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='/pages-sign-in'>Sign In</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/pages-sign-up'>Sign Up</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/pages-reset-password'>Reset Password <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/pages-404'>404 Page <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/pages-500'>500 Page <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>

            <li class="sidebar-item {{ Request::is('ukt') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/ukt') }}">
                    <i class="far fa-clipboard align-middle"></i> <span class="align-middle">UKT</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
