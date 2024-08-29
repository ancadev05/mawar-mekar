 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link collapsed" href="{{ url('/dashboard') }}">
                 <i class="bi bi-columns-gap"></i>
                 <span>Dashboard</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link collapsed" href="{{ url('/cabang') }}">
                 <i class="bi bi-laptop"></i>
                 <span>Cabang</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link collapsed" href="{{ url('/unit') }}">
                 <i class="bi bi-laptop"></i>
                 <span>Unit Latihan</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#pesilat" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-tools"></i><span>Pesilat</span><i class="bi bi-chevron-down ms-auto"></i>
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
            <a class="nav-link collapsed" href="{{ url('/ukt') }}">
                <i class="bi bi-laptop"></i>
                <span>UKT</span>
            </a>
          </li>

     </ul>
     {{-- <div class="position-absolute bottom-0 mb-2 bg-text seondary text-center" style="font-size: 15px"><span class="text-center"><u>Teknisi_ta' V-Beta 1.0</u></span></div> --}}

 </aside><!-- End Sidebar-->
