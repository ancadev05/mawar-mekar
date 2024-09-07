<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('mawar-mekar') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/mawar-mekar') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block text-center"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="fas fa-home"></i>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('cabang') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/cabang') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block text-center"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="fas fa-network-wired"></i>
                            </span>
                            <span class="nav-link-title">
                                Cabang
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('unit') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/unit') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block text-center"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="fas fa-project-diagram"></i>
                            </span>
                            <span class="nav-link-title">
                                Unit
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block text-center"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                                <i class="fas fa-running"></i>
                            </span>
                            <span class="nav-link-title">
                                Pesilat
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/siswa') }}">
                                <span class="nav-link-title">
                                    Siswa
                                </span>
                            </a>
                            <a class="dropdown-item" href="{{ url('/kader') }}">
                                <span class="nav-link-title">
                                    Kader
                                </span>
                            </a>
                            <a class="dropdown-item" href="{{ url('/pendekar') }}">
                                <span class="nav-link-title">
                                    Pendekar
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('ukt') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/ukt') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block text-center"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="fas fa-clipboard-list"></i>
                            </span>
                            <span class="nav-link-title">
                                UKT
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('ijazah') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/ijazah') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block text-center"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="fas fa-folder-open"></i>
                            </span>
                            <span class="nav-link-title">
                                Ijazah
                            </span>
                        </a>
                    </li>
                </ul>


                <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="./" method="get" autocomplete="off" novalidate>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                    <path d="M21 21l-6 -6" />
                                </svg>
                            </span>
                            <input type="text" value="" class="form-control" placeholder="Search…"
                                aria-label="Search in website">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
