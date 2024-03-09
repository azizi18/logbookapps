<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto">User</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="{{asset('admin/data-logbook')}}">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User</li>
              </ol>
            </div>
          </div>
          <!-- PAGE-HEADER END -->
          <div class="row">
            <div class="col-12 col-sm-12">
                <a href="{{ asset('admin/data-logbook/add') }}"><button type="button" class="btn btn-primary btn-wave">Tambah Data</button></a>
                
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-file-earmark-spreadsheet"></i>  
                    Import Data Excel</button>
                                             
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel1">Import Data User</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ asset('admin/data-logbook/import') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                        {{ csrf_field() }}
                                        
                                            <label class="col-md-9 text-right">Tambah File Dalam Bentuk excel</label>
                                            <div class="col-md-9 mt-2">
                                                <input type="file" name="file" required="required">
                                                 
                                            </div>
                                            <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">Simpan Data
                                            </button>
                                           
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Kembali</button>
                                            </div>
                                    </form>
                                        
                                </div>
                               
                            </div>
                        </div>
                    </div>  
                    <span>
                        <a href="{{asset('admin/data-logbook/export')}}" class="btn btn-secondary" target="blank"><i class="bi bi-download"></i> Export
                          </a>
                      </span>
                    <span>
                        <a href="{{asset('assets/file/user.xlsx')}}" class="btn btn-outline-dark" target="blank"><i class="bi bi-download"></i> Download Templeate Excel
                          </a>
                      </span>
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
                            <form action="{{ asset('admin/logbook/proses') }}" method="post" accept-charset="utf-8">
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
                                        @foreach ($logbook as $index => $logbook )       
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
                                                <div class="hstack gap-2 flex-wrap">
                                                    <a href="{{ asset('admin/data-logbook/edit/'.$logbook->id) }}" class="text-info fs-14 lh-1"><i
                                                            class="ri-edit-line"></i></a>
                                                     <a href="{{ asset('admin/data-logbook/delete/'.$logbook->id) }}" class="text-danger fs-14 lh-1 delete-link"><i class="ri-delete-bin-5-line"></i></a>
                
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

 
<!-- End:: row-2 -->