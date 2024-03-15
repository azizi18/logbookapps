
<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto">Data Mahasiswa</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="{{asset('admin/data-mahasiswa')}}">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
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
                           Input Data Mahasiswa
                        </div>
                    </div>
                    <form action="{{ url('admin/assign-mahasiswa-dosen/tambah') }}" method="POST" accept-charset="utf-8" class="needs-validation" novalidate>
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="mt-2">
                                <label class="form-label">Pilih Dosen</label>
                                <select name="dosen_id" id="dosen_id" class="form-select">
                                    @foreach($dosen as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                    @endforeach
                                </select>
                               
                            </div>

                            <div class="row mt-4">
                                <div class="">
                                    <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100 mt-4">
                                        <thead>
                                            <tr>
                                                <th width="5%">NO</th>
                                                <th width="60%">MAHASISWA</th>
                                                <th width="5%">PILIH MAHASISWA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mahasiswa as $index => $mahasiswa )       
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>{{$mahasiswa->nama}}</td>
                                                
                                               
                                                <td align="center">
                                                    <input type="checkbox"  style="width: 18px; height: 18px;" name="selected_mahasiswas[]" value="{{ $mahasiswa->id }}">
            
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                {{-- <select name="mahasiswa_id" id="mahasiswa_id" class="form-select">
                                    @foreach($mahasiswa as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                    @endforeach
                                </select> --}}
                            </div>
                            {{-- @foreach ($mahasiswa as $mahasiswa)
                            <label>{{ $mahasiswa->nama }}</label><br>
                            <input type="checkbox" name="selected_mahasiswas[]" value="{{ $mahasiswa->id }}">
                        @endforeach --}}
                            
                            <div class="mt-4">

                            
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              
                                    <button type="submit" name="submit" class="btn btn-primary rounded-pill btn-wave">Simpan Data</button>
                                    
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
