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
        <div class="alert alert-info w-full">
            <marquee behavior="" direction=""><p>Hai <strong>{{Auth::user()->nama}}</strong>, Selamat datang di Halaman Dashboard</p></marquee>
        
        </div>

        <!-- ROW-1 -->
        <div class="row">
          
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
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Mahasiswa Analytics</h3>
                    </div>
                    <div class="card-body">
                      
                        <div id="chart">
                            {!! $chart->container() !!}
                        </div>
                    
                        {!! $chart->script() !!}
                    </div>
                </div>
        </div>
        <!-- ROW-2 END -->

      

       

    </div>
</div>
