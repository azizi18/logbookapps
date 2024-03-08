
<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto">LogBook</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="{{asset('admin/data-logbook')}}">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">LogBook</li>
              </ol>
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ asset('admin/data-logbook') }}" class="btn btn-success btn-sm">
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
                           Input Data Logbook
                        </div>
                    </div>
                    <form action="{{ asset('admin/data-logbook/tambah') }}" method="POST" accept-charset="utf-8" class="needs-validation" novalidate>
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3 has-validation">
                                    <label class="form-label" for="validationnamapasien">Nama Pasien</label>
                                    <input type="text" name="nama_pasien" class="form-control" id="validationnamapasien" placeholder="Nama Pasien"
                                        aria-label="Nama Pasien" value="{{old('nama_pasien')}}" required>
                                        <div class="invalid-feedback">
                                            Please choose a nama pasien.
                                        </div>
                                </div>
                                {{-- @if ($errors->has('nama_pasien'))
                                <div class="alert alert-danger mt-2">{{ $errors->first('nama_pasien') }}</div>
                                @endif --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationumur">Umur</label>
                                    <input type="number" name="umur" class="form-control" id="validationumur" placeholder="Umur"
                                        aria-label="Umur" value="{{old('umur')}}" required>
                                        <div class="invalid-feedback">
                                            Please choose a umur.
                                        </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" >MR</label>
                                    <input type="text" name="mr" class="form-control" placeholder="Mr"
                                        aria-label="mr" value="{{old('mr')}}">
                                       
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Diagnosis Masuk</label>
                                    <input type="text" name="diagnosis_masuk" class="form-control" placeholder="Diagnosis Masuk"
                                        aria-label="Diagnosis Masuk" value="{{old('diagnosis_masuk')}}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Diagnosis Keluar</label>
                                    <input type="text" name="diagnosis_keluar" class="form-control" placeholder="Diagnosis Keluar"
                                        aria-label="Diagnosis Keluar" value="{{old('diagnosis_keluar')}}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationtindakan">Tindakan</label>
                                    <input type="text" name="tindakan"  class="form-control" id="validationtindakan" placeholder="Tindakan"
                                        aria-label="Tindakan" value="{{old('tindakan')}}" required>
                                        <div class="invalid-feedback">
                                            Please choose a tindakan.
                                        </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">DPJP</label>
                                    <input type="text" name="dpjp" class="form-control" placeholder="DPJP"
                                        aria-label="DPJP" value="{{old('dpjp')}}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Klasifikasi Kasus</label>
                                    <input type="text" name="klasifikasi_kasus" class="form-control" placeholder="Klasifikasi Kasus"
                                        aria-label="Klasifikasi Kasus" value="{{old('klasifikasi_kasus')}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Khusus Kasus Obstetri</label>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-12 mb-3">
                                            <select id="inputState1" name="kasus_obstetri" class="form-select">
                                                <option selected disabled>--Option--</option>
                                                <option value="diagnosis_obstetri">Diagnosis Obstetri</option>
                                                <option value="tindakan_obstetri">Tindakan Obstetri</option>
                                            </select>
                                        </div>
                                     
                                        
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Khusus Kasus Ginekologi</label>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-12 mb-3">
                                            <select id="inputState1" name="kasus_ginekologi" class="form-select">
                                                <option selected disabled>--Option--</option>
                                                <option value="diagnosis_ginekologi">Diagnosis Ginekologi</option>
                                                <option value="tindakan_ginekologi">Tindakan Ginekologi</option>
                                            </select>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Level Kompetensi</label>
                                    <input type="text" name="level_kompetensi" class="form-control" placeholder="Level Kompetensi"
                                        aria-label="Level Kompetensi" value="{{old('level_kompetensi')}}">
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Asal Rujukan</label>
                                    <input type="text" name="asal_rujukan" class="form-control" placeholder="Asal Rujukan"
                                        aria-label="Asal Rujukan" value="{{old('asal_rujukan')}}">
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="text-area" class="form-label">Keterangan</label>
                                    <textarea class="form-control" name="keterangan" id="text-area" placeholder="Keterangan" value="{{old('keterangan')}}"></textarea>
                                   
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tanggal Masuk</label>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-12 mb-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" name="tanggal_masuk" class="form-control" id="date" placeholder="dd/mm/yyyy" value="{{old('tanggal_masuk')}}">
                                                </div>
                                            </div>
                                        </div>
                                     
                                        
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tanggal Tindakan</label>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-12 mb-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" name="tanggal_tindakan" class="form-control" id="date" placeholder="dd/mm/yyyy" value="{{old('tanggal_tindakan')}}">
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                               
                                    </div>
                                </div>
                               
                                
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              
                                    <button type="submit" name="submit" class="btn btn-primary rounded-pill btn-wave">Simpan Data</button>
                                    <input type="reset" name="reset" class="btn btn-light rounded-pill btn-wave " value="Reset">
                                    
                            </div>
                            </div>
                        </div>

                   
                    </form>
                </div>
            </div>
          </div>

    </div>
</div>
