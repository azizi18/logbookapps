<?php 
$user = DB::table('users')->first();
?>
  <!-- app-header -->
  <header class="app-header">

    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">

        <!-- Start::header-content-left -->
        <div class="header-content-left">


            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

        

        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <div class="header-content-right">
            <!-- Start::header-element -->
            <div class="header-element main-profile-user">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-xxl-2 me-0">
                            <img src="{{asset('assets/images/faces/user-image.png')}}" alt="img" width="32" height="32" class="rounded-circle">
                        </div>
                        
                        
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                    <li class="drop-heading d-xxl-none d-block">
                                 <div class="text-center">
                                    <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ auth()->user()->nama}}</h5>
                                    <small class="text-muted">{{ auth()->user()->level}}</small>
                                </div>
                            </li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="{{ url('user/profil')}}"><i class="fe fe-user fs-18 me-2 text-primary"></i>Profile</a></li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="{{ url('logout')}}"><i class="fe fe-info fs-18 me-2 text-primary"></i>Log Out</a></li>
                </ul>
            </div>
            <!-- End::header-element -->

        

        </div>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>
<!-- /app-header -->
  
