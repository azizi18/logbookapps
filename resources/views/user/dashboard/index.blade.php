<div class="main-content app-content">
    <div class="container-fluid">


        <!-- PAGE-HEADER -->
        <div class="page-header">
          <h1 class="page-title my-auto">Dashboard</h1>
          <div>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="{{asset('users/dashboard')}}">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
        </div>
        <!-- PAGE-HEADER END -->
        <div class="alert alert-info">
            <marquee behavior="" direction=""><p>Hai <strong>{{Auth::user()->nama}}</strong>, Selamat datang di Halaman Dashboard</p></marquee>
        
        </div>

        <!-- ROW-1 -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="fw-normal">Jumlah Users</h6>
                                <h2 class="mb-0 text-dark fw-semibold">{{ $total_users }}</h2>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart" class="chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                        <span class="text-muted fs-12"><span class="text-secondary"><i
                                    class="fe fe-arrow-up-circle text-secondary"></i> {{ $persentase_users }} %</span>
                            Users</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="fw-normal">Jumlah Data LogBook Saya</h6>
                                <h2 class="mb-0 text-dark fw-semibold">{{ $total_logbook }}</h2>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="leadschart"
                                        class="chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                        <span class="text-muted fs-12"><span class="text-pink"><i
                                    class="fe fe-arrow-down-circle text-pink"></i> {{$persentase_logbook }}%</span>
                            Data logBook</span>
                    </div>
                </div>
            </div>
       
       

        <!-- ROW-2 -->
        <div class="row">
            <div class="col-xxl-9">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">LogBook Analytics</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex mx-auto text-center justify-content-center mb-4">
                            <div class="d-flex text-center justify-content-center me-3"><span
                                    class="dot-label bg-primary my-auto"></span>Jumlah Users</div>
                            <div class="d-flex text-center justify-content-center"><span
                                    class="dot-label bg-secondary my-auto"></span>jumlah Logbook</div>
                        </div>
                        {{-- <div class="chartjs-wrapper-demo w-100">
                            <canvas id="dashboardChart" class="chart-dropshadow w-100"></canvas>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-2 END -->

      

       

    </div>
</div>
