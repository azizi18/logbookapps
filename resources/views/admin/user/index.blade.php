<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto">User</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User</li>
              </ol>
            </div>
          </div>
          <!-- PAGE-HEADER END -->
          <div class="row">
            <div class="col-12 col-sm-12">
                <a href="{{ asset('admin/user/add') }}"><button type="button" class="btn btn-primary btn-wave">Tambah Data</button></a>
                
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
                                    <form action="{{ asset('admin/user/import') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
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
                        <a href="{{asset('assets/file/data-user.xlsx')}}" class="btn btn-outline-dark" target="blank"><i class="bi bi-download"></i> Download Templeate Excel
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


  <!-- Start:: row-2 -->
  
  <div class="row mt-4">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                   Data User
                </div>
            </div>
            <form action="{{ asset('admin/user/proses') }}" method="post" accept-charset="utf-8">
                {{ csrf_field() }}
            <div class="card-body">
                <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="30%">NAMA</th>
                            <th width="20%">USERNAME</th>
                            <th width="10%">LEVEL</th>
                            <th width="5%">ACTION</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($user as $user) { ?>
        
                        <tr>
                            <td class="text-center">
                                <small class="text-center">{{$i}}</small>
                            </td>                
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->level}}</td>

                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="{{ asset('admin/user/edit/'.$user->id) }}" class="text-info fs-14 lh-1"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="{{ asset('admin/user/delete/'.$user->id) }}" class="text-danger fs-14 lh-1" id="delete-link"><i
                                            class="ri-delete-bin-5-line delete-link" ></i></a>
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