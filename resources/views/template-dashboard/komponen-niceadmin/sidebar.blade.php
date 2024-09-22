 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link {{ Request::is('mawar-mekar') ? '' : 'collapsed' }}" href="{{ url('/mawar-mekar') }}">
                 <i class="bi bi-house-door"></i>
                 <span>Home</span>
             </a>
         </li>

         @if (Auth::guard('web')->check())
            @if (Auth::guard('web')->user()->level_akun_id == 2)
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('cabang') ? '' : 'collapsed' }}" href="{{ url('/cabang') }}">
                        <i class="bi bi-diagram-2"></i>
                        <span>Cabang</span>
                    </a>
                </li>
            @endif
         @endif
         

         <li class="nav-item">
             <a class="nav-link {{ Request::is('unit') ? '' : 'collapsed' }}" href="{{ url('/unit') }}">
                 <i class="bi bi-diagram-3"></i>
                 <span>Unit Latihan</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link {{ Request::is('pendekar', 'kader', 'siswa') ? '' : 'collapsed' }}"
                 data-bs-target="#pesilat" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-person-walking"></i>
                 <span>Pesilat</span>
                 <span class="ms-auto"><i class="bi bi-chevron-down"></i></span>
             </a>
             <ul id="pesilat" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ url('/pendekar') }}">
                         <i class="bi bi-circle-fill"></i><span>Pendekar</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('/kader') }}">
                         <i class="bi bi-circle-fill"></i><span>Kader</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('/siswa') }}">
                         <i class="bi bi-circle-fill"></i><span>Siswa</span>
                     </a>
                 </li>
             </ul>
         </li><!-- End Forms Nav -->

         {{-- manu untuk pesilat --}}
         @if (Auth::guard('pesilat')->check())
            <li class="nav-item">
                <a class="nav-link {{ Request::is('ijazah') ? '' : 'collapsed' }}" href="{{ url('/ijazah') }}">
                    <i class="bi bi-folder2-open"></i>
                    <span>Ijazah</span>
                </a>
            </li>
         @endif

         

         @if (Auth::guard('web')->check())
            @if (Auth::guard('web')->user()->level_akun_id == 2)
            <li class="nav-item">
                <a class="nav-link {{ Request::is('ukt') ? '' : 'collapsed' }}" href="{{ url('/ukt') }}">
                    <i class="bi bi-clipboard-data"></i>
                    <span>UKT</span>
                </a>
            </li>

                {{-- admin cabang --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pesilat-approve') ? '' : 'collapsed' }}" href="{{ url('/pesilat-approve') }}">
                        <i class="bi bi-person-check"></i>
                        <span>Approve Pesilat</span>
                    </a>
                </li>

                {{-- admin cabang --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('user') ? '' : 'collapsed' }}" href="{{ url('/user') }}">
                        <i class="bi bi-person-circle"></i>
                        <span>Admin Cabang</span>
                    </a>
                </li>
            @endif
         @endif


     </ul>
     {{-- <div class="position-absolute bottom-0 mb-2 bg-text seondary text-center" style="font-size: 15px"><span class="text-center"><u>Teknisi_ta' V-Beta 1.0</u></span></div> --}}

 </aside><!-- End Sidebar-->
