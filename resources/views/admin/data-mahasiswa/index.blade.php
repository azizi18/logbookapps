<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto"> Data Mahasiswa</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="{{asset('admin/data-mahasiswa')}}">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"> Data Mahasiswa</li>
              </ol>
            </div>
          </div>
          <!-- PAGE-HEADER END -->
        
                              
          <div class="row">
            <div class="col-12 col-sm-12">
                <a href="{{ asset('admin/assign-mahasiswa-dosen/add') }}"><button type="button" class="btn btn-primary btn-wave">Tambah Data</button></a>    
                            
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
                                    Data Mahasiswa
                                </div>
                            </div>
                            <form method="POST" action="{{ asset('updateStatus') }}">
                                @csrf
                            <div class="card-body">
                                <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th width="5%">NO</th>
                                            <th width="50%">Mahasiswa</th>
                                            <th width="40%">Dosen</th>
                                            <th width="5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataassigmentMahasiswa as $index => $dataassigmentMahasiswa)       
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            
                                            <td>{{ isset($dataassigmentMahasiswa->mahasiswa->nama) ? $dataassigmentMahasiswa->mahasiswa->nama : 'Mahasiswa tidak ditemukan' }}</td>
                                            <td>{{ isset($dataassigmentMahasiswa->dosen->nama) ? $dataassigmentMahasiswa->dosen->nama : 'Dosen tidak ditemukan' }}</td>
                                            <td align="center">
                                                <a href="{{ asset('admin/assign-mahasiswa-dosen/edit/'.$dataassigmentMahasiswa->id) }}" class="text-info fs-14 lh-1"><i
                                                    class="ri-edit-line"></i></a>
                                                    <a href="{{ asset('admin/assign-mahasiswa-dosen/delete/'.$dataassigmentMahasiswa->id) }}" class="text-danger fs-14 lh-1 delete-link"><i class="ri-delete-bin-5-line"></i></a>
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
                