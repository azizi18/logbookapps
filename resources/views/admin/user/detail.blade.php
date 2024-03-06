<div class="main-content app-content">
    <div class="container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
          <h1 class="page-title my-auto">Profile</h1>
          <div>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Pages</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </div>
        </div>
        <!-- PAGE-HEADER END -->


        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-3">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body border-bottom">
                        <div class="d-sm-flex  main-profile-cover">
                            <span class="avatar avatar-xxl online me-3">
                                <img src="{{asset('assets/images/faces/user-image.png')}}" alt="img" class="avatar avatar-xxl">
                            </span>
                            <div class="flex-fill main-profile-info my-auto">
                                <h5 class="fw-semibold mb-1 ">{{Auth::user()->name}}</h5>
                                <div>
                                    <p class="mb-1 text-muted">{{Auth::user()->level}}</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                   
                
                </div>
                <div class="card custom-card">
                    <div class="p-4  border-bottom border-block-end-dashed">
                        <p class="fs-15 mb-2 me-4 fw-semibold">Data User</p> 
                        <ul class="list-group">
                            <li class="list-group-item border-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Name :
                                    </div>
                                    <span class="fs-12 text-muted">{{Auth::user()->nama}}</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                       Username :
                                    </div>
                                    <span class="fs-12 text-muted">{{Auth::user()->username}}</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Status :
                                    </div>
                                    <span class="fs-12 text-muted">{{Auth::user()->level}}</span>
                                </div>
                            </li>
                            
                        </ul>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('admin/user/edit_password') }}" class="btn btn-primary btn-wave">
                                <i class="bi bi-pencil-square"></i> Ubah Password
                            </a>   
                    </div>
                    </div>
                  
                </div>
            </div>
            
            
        </div>
        <!--End::row-1 -->

    </div>
</div>