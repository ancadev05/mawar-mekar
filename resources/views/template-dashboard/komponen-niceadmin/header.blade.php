!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo-ts-gowa.png') }}" alt="">
            <span class="d-none d-lg-block">Mawar</span>
        </a>
    </div><!-- End Logo -->
    <i class="bi bi-list toggle-sidebar-btn"></i>

    {{-- <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="get" action="{{ url('laptop-cari') }}">
            <input type="search" name="cari" placeholder="Search Id or SN Laptop" title="Enter search keyword" value="{{ Request::get('cari') }}">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div> --}}
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/user.png') }}" alt="Profile" class="rounded-circle">
                    @if (Auth::guard('web')->check())
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::guard('web')->user()->name }}</span>
                    @else
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::guard('pesilat')->user()->nama_pesilat }}</span>
                    @endif
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        @if (Auth::guard('web')->check())
                            <h6>{{ Auth::guard('web')->user()->name }}</h6>
                            <span>Admin {{ Auth::guard('web')->user()->cabang->cabang }}</span>
                        @else
                            <h6>{{ Auth::guard('pesilat')->user()->nama_pesilat }}</h6>
                            <span>{{ Auth::guard('pesilat')->user()->jenjang }}</span>
                        @endif
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    {{-- <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ url('/profil') }}">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li> --}}
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ url('/logout') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
