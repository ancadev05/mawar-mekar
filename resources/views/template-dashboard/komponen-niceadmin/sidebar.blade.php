 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

        {{-- ################################################ --}}
        {{-- menu pimda --}}
        

         {{-- pengecekan apakah yang login admin pimda atau cabang --}}
         @if (Auth::guard('web')->check())
         {{-- menu yang ditampilkan hanya untuk admin pimda --}}
             @if (Auth::guard('web')->user()->level_akun_id == 2)
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('mawar-mekar/pimda') ? '' : 'collapsed' }}" href="{{ url('/mawar-mekar/pimda') }}">
                        <i class="bi bi-house-door"></i>
                        <span>Home</span>
                    </a>
                </li>
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('cabang') ? '' : 'collapsed' }}" href="{{ url('/cabang') }}">
                         <i class="bi bi-diagram-2"></i>
                         <span>Cabang</span>
                     </a>
                 </li>
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
                 </li>
                 {{-- <li class="nav-item">
                     <a class="nav-link {{ Request::is('ukt') ? '' : 'collapsed' }}" href="{{ url('/ukt') }}">
                         <i class="bi bi-clipboard-data"></i>
                         <span>UKT</span>
                     </a>
                 </li> --}}
                 {{-- admin cabang --}}
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('pesilat-approve') ? '' : 'collapsed' }}"
                         href="{{ url('/pesilat-approve') }}">
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

{{-- ################################################### --}}

         {{-- menu untuk admin cabang --}}
         {{-- pengecekan apakah yang login admin pimda atau cabang --}}
         @if (Auth::guard('web')->check())
            {{-- menu yang ditampilkan hanya untuk admin pimda --}}
             @if (Auth::guard('web')->user()->level_akun_id == 3)
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('mawar-mekar/cabang') ? '' : 'collapsed' }}" href="{{ url('/mawar-mekar/cabang') }}">
                        <i class="bi bi-house-door"></i>
                        <span>Home</span>
                    </a>
                </li>
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
                 </li>
             @endif
         @endif

         {{-- manu untuk pesilat --}}
         {{-- pengecekana apakah yang login pesilat --}}
         @if (Auth::guard('pesilat')->check())
            <li class="nav-item">
                <a class="nav-link {{ Request::is('mawar-mekar/pesilat') ? '' : 'collapsed' }}" href="{{ url('/mawar-mekar/pesilat') }}">
                    <i class="bi bi-house-door"></i>
                    <span>Home</span>
                </a>
            </li>
             {{-- <li class="nav-item">
                 <a class="nav-link {{ Request::is('ijazah') ? '' : 'collapsed' }}" href="{{ url('#') }}">
                     <i class="bi bi-clipboard-data"></i>
                     <span>UKT</span>
                 </a>
             </li> --}}
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('ijazah/1') ? '' : 'collapsed' }}" href="{{ url('/ijazah/1') }}">
                     <i class="bi bi-folder2-open"></i>
                     <span>Ijazah</span>
                 </a>
             </li>
             {{-- <li class="nav-item">
                 <a class="nav-link {{ Request::is('#') ? '' : 'collapsed' }}" href="#">
                     <i class="bi bi-folder2-open"></i>
                     <span>Materi</span>
                 </a>
             </li> --}}
         @endif


     </ul>
     {{-- <div class="position-absolute bottom-0 mb-2 bg-text seondary text-center" style="font-size: 15px"><span class="text-center"><u>Teknisi_ta' V-Beta 1.0</u></span></div> --}}

 </aside><!-- End Sidebar-->
