<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto">Data Logbook</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="{{asset('users/data-logbook')}}">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Logbook</li>
              </ol>
            </div>
          </div>
          <!-- PAGE-HEADER END -->
          <div class="row">
            <div class="col-12 col-sm-12">
                <a href="{{ asset('users/data-logbook/add') }}"><button type="button" class="btn btn-primary btn-wave">Tambah Data</button></a>
                
                 
            </div>
            
            
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
                                    Data logBook
                                </div>
                            </div>
                            <form action="{{ asset('users/logbook/proses') }}" method="post" accept-charset="utf-8">
                                {{ csrf_field() }}
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
                                            <th width="5%">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach($logbook  as $logbook) { ?>
                                        <tr>
                                            <td>{{$logbook->id}}</td>
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
                                                <div class="hstack gap-2 flex-wrap">
                                                    <a href="{{ asset('users/data-logbook/edit/'.$logbook->id) }}" class="text-info fs-14 lh-1"><i
                                                            class="ri-edit-line"></i></a>
                                                  <a href="{{ asset('users/data-logbook/delete/'.$logbook->id) }}" class="text-danger fs-14 lh-1 delete-link"><i class="ri-delete-bin-5-line"></i></a>

                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>  
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

 
<!-- End:: row-2 -->