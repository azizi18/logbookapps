<aside class="app-sidebar sticky" id="sidebar">

  <!-- Start::main-sidebar-header -->
  <div class="main-sidebar-header">
      <a href="index.html" class="header-logo">
          <h3 class="desktop-logo">LOGBOOK</h3>
      </a>
  </div>
  <!-- End::main-sidebar-header -->

  <!-- Start::main-sidebar -->
  <div class="main-sidebar" id="sidebar-scroll">

      <!-- Start::nav -->
      <nav class="main-menu-container nav nav-pills flex-column sub-open">
          <div class="slide-left" id="slide-left">
              <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
          </div>
          <ul class="main-menu">
              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Utama</span></li>
              <!-- End::slide__category -->

             
        @if (auth()->user()->level=="admin")
         <!-- Start::slide -->
         <li class="slide">
            <a href="{{asset('admin/dashboard')}}" class="side-menu__item">
                <i class="fe fe-home side-menu__icon"></i>
                <span class="side-menu__label">Dashboard</span>
            </a>
        </li>
        <!-- End::slide -->
    
              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Data</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <i class="bi bi-clipboard-data side-menu__icon"></i>
                      <span class="side-menu__label">Data Logbook</span>
                      <i class="fe fe-chevron-right side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Data</a>
                      </li>
                      <li class="slide">
                          <a href="{{ asset('admin/data-logbook')}}" class="side-menu__item">Kelola Data LogBook</a>
                      </li>
                      <li class="slide">
                        <a href="{{ asset('admin/data-logbook/add')}}" class="side-menu__item">Input Data LogBook</a>
                    </li>
                  </ul>
              </li>

              <li class="slide has-sub">
                <a href="javascript:void(0);" class="side-menu__item">
                    <i class="bi bi-clipboard-data side-menu__icon"></i>
                    <span class="side-menu__label">Data Mahasiswa</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)">User</a>
                    </li>
                    <li class="slide">
                        <a href="{{ asset('admin/assign-mahasiswa-dosen')}}" class="side-menu__item">Data Mahasiswa Dan Dosen</a>
                    </li>
                   
                    <li class="slide">
                        <a href="{{ asset('admin/assign-mahasiswa-dosen/add')}}" class="side-menu__item">Input Mahasiswa</a>
                    </li>
                   
                </ul>
            </li>
              <!-- Start::slide -->
              <li class="slide has-sub">
                <a href="javascript:void(0);" class="side-menu__item">
                    <i class="fe fe-users side-menu__icon"></i>
                    <span class="side-menu__label">Data User</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="{{ asset('admin/user')}}">User</a>
                    </li>
                    <li class="slide">
                        <a href="{{ asset('admin/user')}}" class="side-menu__item">Kelola Data User</a>
                    </li>
                    <li class="slide">
                        <a href="{{ asset('admin/user/add')}}" class="side-menu__item">Input Data User</a>
                    </li>
                   
                </ul>
            </li>
            
            <li class="slide">
                <a href="{{ url('admin/user/edit_password') }}" class="side-menu__item">
                    <i class="bi bi-pencil-square side-menu__icon"></i>
                    <span class="side-menu__label">Ubah Password</span>
                </a>
            </li>
              @endif

                
              <!-- End::slide -->
              @if (auth()->user()->level=="dosen")

               <!-- Start::slide -->
               <li class="slide">
                <a href="{{asset('dosen/dashboard')}}" class="side-menu__item">
                    <i class="fe fe-home side-menu__icon"></i>
                    <span class="side-menu__label">Dashboard</span>
                </a>
            </li>
            <!-- End::slide -->
               <!-- Start::slide__category -->
               <li class="slide__category"><span class="category-name">Data</span></li>
               <!-- End::slide__category -->
 
               <!-- Start::slide -->
               <li class="slide has-sub">
                   <a href="javascript:void(0);" class="side-menu__item">
                       <i class="bi bi-clipboard-data side-menu__icon"></i>
                       <span class="side-menu__label">Data LogBook</span>
                       <i class="fe fe-chevron-right side-menu__angle"></i>
                   </a>
                   <ul class="slide-menu child1">
                       <li class="slide side-menu__label1">
                           <a href="javascript:void(0)">Data</a>
                       </li>
                       <li class="slide">
                           <a href="{{ asset('dosen/data-logbook')}}" class="side-menu__item">Data LogBook</a>
                       </li>
                       
                   </ul>
               </li>
               <li class="slide">
                <a href="{{ url('dosen/dosen/edit_password') }}" class="side-menu__item">
                    <i class="bi bi-pencil-square side-menu__icon"></i>
                    <span class="side-menu__label">Ubah Password</span>
                </a>
            </li>
              @endif
              <!-- End::slide -->

              <!-- End::slide -->
              @if (auth()->user()->level=="mahasiswa")

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{asset('users/dashboard')}}" class="side-menu__item">
                        <i class="fe fe-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
               <!-- Start::slide__category -->
               <li class="slide__category"><span class="category-name">Data</span></li>
               <!-- End::slide__category -->
 
               <!-- Start::slide -->
               <li class="slide has-sub">
                   <a href="javascript:void(0);" class="side-menu__item">
                       <i class="bi bi-clipboard-data side-menu__icon"></i>
                       <span class="side-menu__label">LogBook</span>
                       <i class="fe fe-chevron-right side-menu__angle"></i>
                   </a>
                   <ul class="slide-menu child1">
                       <li class="slide side-menu__label1">
                           <a href="javascript:void(0)">Data</a>
                       </li>
                       <li class="slide">
                           <a href="{{ asset('users/data-logbook')}}" class="side-menu__item">LogBook</a>
                       </li>
                       <li class="slide">
                        <a href="{{ asset('users/data-logbook/add')}}" class="side-menu__item">Input LogBook</a>
                    </li>
                   </ul>
               </li>
               <li class="slide">
                <a href="{{ url('users/user/edit_password') }}" class="side-menu__item">
                    <i class="bi bi-pencil-square side-menu__icon"></i>
                    <span class="side-menu__label">Ubah Password</span>
                </a>
            </li>
              @endif
              <!-- End::slide -->
          </ul>
          <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
      </nav>
      <!-- End::nav -->

  </div>
  <!-- End::main-sidebar -->

</aside>




