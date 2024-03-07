
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
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ asset('admin/user') }}" class="btn btn-success btn-sm">
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
                           Edit Data User
                        </div>
                    </div>
                    <form action="{{ asset('admin/user/proses_edit') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                    <div class="card-body">
                      <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="col-md-6 col-sm-12">
                            <label for="input-placeholder" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="input-placeholder" placeholder="Nama" value="{{$user->nama}}">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="input-placeholder" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="input-placeholder" placeholder="Username" value="{{$user->username}}">
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="input-placeholder" class="form-label">Password</label>
                          <div class="input-group">
                            <input type="password" name="password" class="form-control form-control-lg" id="signin-password" placeholder="password" value="{{$user->password}}">
                            <button class="btn btn-light" type="button" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                        </div>
  
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="input-placeholder" class="form-label">Level User</label>
                          <select class="select2" name="level">
                              <option value="admin">Admin</option>
                              <option value="dosen">Dosen</option>
                              <option value="users">User</option>
                             
                          </select>
                      </div>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              
                        <button type="submit" name="submit" class="btn btn-primary rounded-pill btn-wave">Update Data</button>
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
