
<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto"> Data Mahasiswa</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="{{asset('admin/assign-mahasiswa-dosen')}}">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"> Data Mahasiswa</li>
              </ol>
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ asset('admin/assign-mahasiswa-dosen') }}" class="btn btn-success btn-sm">
                <i class="bi bi-backspace-fill"></i> Kembali
            </a>           
               
            </div>
    
          <div class="text-right">
           
        </div>
          <div class="row mt-4">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                           Edit Data Mahasiswa
                        </div>
                    </div>
                    <form action="{{ asset('admin/assign-mahasiswa-dosen/proses_edit') }}" method="POST" accept-charset="utf-8" class="needs-validation" novalidate>
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="mt-2">
                                <label class="form-label">Pilih Dosen</label> 
                                
                               
                            </div>
                            <div class="row">
                                <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100 mt-4">
                                    <thead>
                                        <tr>
                                            <th width="30%">MAHASISWA</th>
                                            <th width="30%">DOSEN</th>
                                            <th width="40%">PILIH DOSEN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           
                                        <tr>
                                            
                                            <td>{{$mahasiswa->mahasiswa->nama}}</td>
                                            <td>{{$dosennama->dosen->nama}}</td>
                                           
                                            <td align="center">
                                                <select name="dosen_id" id="dosen_id" class="form-select">
                                                    @foreach($dosen as $dosen)
                                                    <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>                                                 
                                                       @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            <div class="mt-4">

                            
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              
                                    <button type="submit" name="submit" class="btn btn-primary rounded-pill btn-wave">Update Data</button>
                                    
                            </div>
                        </div>
                            </div>
                        </div>

                   
                    </form>
                </div>
            </div>
          </div>

    </div>
</div>
