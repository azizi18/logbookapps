
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="main-content app-content">
    <div class="container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
            <h1 class="page-title my-auto">Ubah Password</h1>
            <div>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">Data</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Ubah Password</li>
              </ol>
            </div>
          </div>
    
    
          <div class="text-right">
           
        </div>
          <div class="row mt-4">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                           Ubah Password
                        </div>
                    </div>
                    <form action="{{ asset('dosen/dosen/proses_edit_password') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                    <div class="card-body">
                        <div class="col-md-6 col-sm-12">
                            <label for="input-placeholder" class="form-label">Password lama</label>
                            <input type="text" name="old_password" class="form-control" id="input-placeholder" placeholder="password lama">
                        </div>
                      
                        <div class="col-md-6 col-sm-12">
                          <label for="input-placeholder" class="form-label">Password Baru</label>
                          <div class="input-group">
                            <input type="password" name="new_password" class="form-control form-control-lg" id="signin-password" placeholder="password baru">
                            <button class="btn btn-light" type="button" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                        </div>
                       
  
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="input-placeholder" class="form-label">Ulangi Password</label>
                          <div class="input-group">
                            <input type="password" name="confirm_password" class="form-control form-control-lg" id="repeat-password" placeholder="ulangi password ">
                            <button class="btn btn-light" type="button" onclick="createpassword('repeat-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                        </div>

                        @if ($errors->has('old_password'))
                        <div class="alert alert-danger mt-2">{{ $errors->first('old_password') }}</div>
                      

                        @if ($errors->has('new_password'))
                        <div class="alert alert-danger mt-2">{{ $errors->first('new_password') }}</div>

                        @endif
                        @endif
                        @if ($errors->has('confirm_password'))
                        <div class="alert alert-danger mt-2">{{ $errors->first('confirm_password') }}</div>

                        @endif
                        </div>
  
                       
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              
                                    <button type="submit" name="submit" class="btn btn-primary rounded-pill btn-wave">Ubah Password</button>
                                    <input type="reset" name="reset" class="btn btn-light rounded-pill btn-wave " value="Reset">
                                    
                            </div>
                            
                       
                    </div>
                    </form>
                </div>
            </div>
          </div>

    </div>
</div>
