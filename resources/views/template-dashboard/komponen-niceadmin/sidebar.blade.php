 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link {{ Request::is('mawar-mekar') ? '' : 'collapsed' }}" href="{{ url('/mawar-mekar') }}">
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
             <a class="nav-link {{ Request::is('pendekar', 'kader', 'siswa') ? '' : 'collapsed' }}" data-bs-target="#pesilat" data-bs-toggle="collapse" href="#">
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

         <li class="nav-item">
             <a class="nav-link {{ Request::is('ukt') ? '' : 'collapsed' }}" href="{{ url('/ukt') }}">
                 <i class="bi bi-clipboard-data"></i>
                 <span>UKT</span>
             </a>
         </li>

         <li class="nav-item">
            <a class="nav-link {{ Request::is('ijazah') ? '' : 'collapsed' }}" href="{{ url('/ijazah') }}">
                <i class="bi bi-folder2-open"></i>
                <span>Ijazah</span>
            </a>
        </li>

     </ul>
     {{-- <div class="position-absolute bottom-0 mb-2 bg-text seondary text-center" style="font-size: 15px"><span class="text-center"><u>Teknisi_ta' V-Beta 1.0</u></span></div> --}}

 </aside><!-- End Sidebar-->
