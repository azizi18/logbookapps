<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto">LogBook</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">LogBook</li>
              </ol>
            </div>
          </div>


          <!-- PAGE-HEADER END -->
          {{-- <div class="row">
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
                               --}}
                                       

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card body w-full">
    <h4 class="text-center mt-4">Pilih Data Mahasiswa Yang Ingin Ditampilkan</h4>
<div class="row mt-4">
    <div class="col-xl-6 mx-3 texet-center">
        <select id="inputState1" class="form-select">
            <option selected disabled>--Mahasiswa--</option>
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                 @endforeach
        </select>

        <div id="logbookData"></div>
    </div>
    </div>
{{-- 
    <div class="row mt-4">
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
                    
                           
                </tbody>
            </table>
        </div>
       
    </div> --}}
</div>
                
                        
                    </div>
                </div>
    </div>
</div>
 
<!-- End:: row-2 -->