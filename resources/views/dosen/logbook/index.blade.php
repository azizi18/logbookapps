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
                  Data LogBook Mahasiswa
                </div>
            </div>
            <form action="{{ asset('getLogbookByUser') }}" method="GET" accept-charset="utf-8">
                {{ csrf_field() }}
                <div class="card-body">
                    {{-- <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th width="5%">NO</th>
                                <th width="50%">Mahasiswa</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswas as $index => $mahasiswa)       
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$mahasiswa->mahasiswa->nama}}</td>
                                <td>
                                    <a href="{{ asset('detailLogbook/'.$mahasiswa->id) }}" class="btn btn-sm btn-primary"></i>Detail Logbook</a>
                                  </td>
                                  
                             
                            </tr>

                           
                            @endforeach
                        </tbody>
                    </table> --}}

                    <div class="row">
                        <h4 class="text-center mt-4">Pilih Data LogbBook Mahasiswa Yang Ingin Ditampilkan</h4>
                        <input type="hidden" name="dosen_id" value="{{ $dosenId }}">
                        <label for="mahasiswa" class="mx-2">Pilih Mahasiswa:</label>
                        <div class="col-xl-12 mx-2 texet-center ">
                        <select name="mahasiswa_id" id="mahasiswa" class="form-select mt-2">
                            @foreach ($mahasiswas as $mahasiswa)
                                <option value="{{ $mahasiswa->mahasiswa->id }}">{{ $mahasiswa->mahasiswa->nama }}</option>
                            @endforeach
                        </select>
                        {{-- <select name="mahasiswa_id" id="mahasiswa" class="form-select mt-2">
                            @foreach ($mahasiswas as $mahasiswaAssignment)
                                @if ($mahasiswaAssignment->mahasiswa)
                                    <option value="{{ $mahasiswaAssignment->mahasiswa->id }}">{{ $mahasiswaAssignment->mahasiswa->nama }}</option>
                                @endif
                            @endforeach
                        </select> --}}
                    </div>
                    
                        <div class="d-grid gap-4 d-md-flex justify-content-md-end">
                      
                            <button type="submit" name="submit" class="btn btn-primary rounded-pill btn-wave mt-4">Tampilkan Logbook</button>
                            
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
  
 
<!-- End:: row-2 -->