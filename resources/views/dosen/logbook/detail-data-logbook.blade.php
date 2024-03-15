<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto">User</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="{{asset('dosen/data-logbook')}}">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User</li>
              </ol>
            </div>
          </div>
          <!-- PAGE-HEADER END -->
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ asset('dosen/data-logbook') }}" class="btn btn-success btn-sm">
                <i class="bi bi-backspace-fill"></i> Kembali
            </a>           
               
            </div>
                              
                         

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

  <div class="row mt-4">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Data LogBook Mahasiswa
                                </div>
                            </div>
                           
                            <div class="card-body">
                                <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th width="5%">NO</th>
                                            <th width="40%">NAMA PASIEN</th>
                                            <th width="5%">UMUR</th>
                                            <th width="5%">MR</th>
                                            <th width="20%">DIAGNOSIS MASUK</th>
                                            <th width="20%">DIAGNOSIS KELUAR</th>
                                            <th width="20%">TINDAKAN</th>
                                            <th width="5%">DPJP</th>
                                            <th width="20%">KLASIIFKASI KASUS</th>
                                            <th width="20%">KASUS OBSTETRI</th>
                                            <th width="20%">KASUS GINEKOLOGI</th>
                                            <th width="15%">LEVEL KOMPETENSI</th>
                                            <th width="15%">ASAL RUJUKAN</th>
                                            <th width="25%">KETERANGAN</th>
                                            <th width="10%">TANGGAL MASUK</th>
                                            <th width="10%">TANGGAL TINDAKAN</th>
                                            <th width="10%">STATUS</th>
                                            <th width="10%">VALIDASI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logbooks as $index =>  $logbook)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>{{$logbook->nama_pasien}}</td>
                                            <td>{{$logbook->umur}}</td>
                                            <td>{{$logbook->mr}}</td>
                                            <td>{{$logbook->diagnosis_masuk}}</td>
                                            <td>{{$logbook->diagnosis_keluar}}</td>
                                            <td>{{$logbook->tindakan}}</td>
                                            <td>{{$logbook->dpjp}}</td>
                                            <td>{{$logbook->klasifikasi_kasus}}</td>
                                            <td>{{$logbook->kasus_obstetri}}</td>
                                            <td>{{$logbook->kasus_ginekologi}}</td>
                                            <td>{{$logbook->level_kompetensi}}</td>
                                            <td>{{$logbook->asal_rujukan}}</td>
                                            <td>{{$logbook->keterangan}}</td>
                                            <td>{{$logbook->tanggal_masuk}}</td>
                                            <td>{{$logbook->tanggal_tindakan}}</td>
                                            <td>
                                                <small class="badge <?php if($logbook->status=="diterima") { echo 'badge bg-outline-primary'; }else{ echo 'badge bg-outline-warning'; } ?> btn-block">
                                                  <i class="fa <?php if($logbook->status=="ditunda") { echo 'fa-check-circle'; }else{ echo 'fa-times'; } ?>"></i> <?php echo $logbook->status ?></small>
                                              </td>
                                            <td>
                                                <a href="update-status/{{$logbook->id}}" class="btn btn-sm btn-secondary">
                                                   OK
                                                    
                                                  </a>
                                              </td>
                                            
                                              
                                         
                                        </tr>
                                       
                                       
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                               
                                    
                            </div>
                            </div>
                           

                          
                        </div>
                    </div>
                </div>
               
                <script>
                    const buttons = document.querySelectorAll('.update-status-btn');
                    buttons.forEach(button => {
                        button.addEventListener('click', function() {
                            this.style.backgroundColor = this.style.backgroundColor === 'green' ? 'red' : 'green';
                        });
                    });
                </script>