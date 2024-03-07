
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
                    <form action="{{ asset('admin/logbook/tambah') }}" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nama Pasien</label>
                                    <input type="text" class="form-control" placeholder="Nama Pasien"
                                        aria-label="Nama Pasien">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Umur</label>
                                    <input type="text" class="form-control" placeholder="Umur"
                                        aria-label="Umur">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Diagnosis Masuk</label>
                                    <input type="text" class="form-control" placeholder="Diagnosis Masuk"
                                        aria-label="Diagnosis Masuk">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Diagnosis Keluar</label>
                                    <input type="text" class="form-control" placeholder="Diagnosis Keluar"
                                        aria-label="Diagnosis Keluar">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tindakan</label>
                                    <input type="text" class="form-control" placeholder="Tindakan"
                                        aria-label="Tindakan">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">DPJP</label>
                                    <input type="text" class="form-control" placeholder="DPJP"
                                        aria-label="DPJP">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Klasifikasi Kasus</label>
                                    <input type="text" class="form-control" placeholder="Klasifikasi Kasus"
                                        aria-label="Klasifikasi Kasus">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Khusus Kasus Obstetri</label>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-12 mb-3">
                                            <select id="inputState1" class="form-select">
                                                <option selected disabled>--Option--</option>
                                                <option>Diagnosis Obstetri</option>
                                                <option>Tindakan Obstetri</option>
                                            </select>
                                        </div>
                                     
                                        
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Khusus Kasus Ginekologi</label>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-12 mb-3">
                                            <select id="inputState1" class="form-select">
                                                <option selected disabled>--Option--</option>
                                                <option>Diagnosis Ginekologi</option>
                                                <option>Tindakan Ginekologi</option>
                                            </select>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Level Kompetensi</label>
                                    <input type="text" class="form-control" placeholder="Level Kompetensi"
                                        aria-label="Level Kompetensi">
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Asal Rujukan</label>
                                    <input type="text" class="form-control" placeholder="Asal Rujukan"
                                        aria-label="Asal Rujukan">
                                </div>

                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">D.O.B</label>
                                    <input type="date" class="form-control"
                                    aria-label="dateofbirth">
                                </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        
                                        <div class="col-xl-12 mb-3">
                                            <div class="row">
                                                <label class="form-label mb-1">Maritial Status</label>
                                                <div class="col-xl-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="status-married" required="">
                                                        <label class="form-check-label" for="status-married">
                                                            Married
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="status-unmarried" required="">
                                                        <label class="form-check-label" for="status-unmarried">
                                                            Single
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Contact Number</label>
                                    <input type="number" class="form-control" placeholder="Phone number"
                                        aria-label="Phone number">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Alternative Contact</label>
                                    <input type="number" class="form-control" placeholder="Phone number"
                                        aria-label="Phone number">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
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
