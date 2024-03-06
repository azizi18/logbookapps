<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin dashboard,dashboard design htmlbootstrap admin template,html admin panel,admin dashboard html,admin panel html template,bootstrap dashboard,html admin template,html dashboard,html admin dashboard template,bootstrap dashboard template,dashboard html template,bootstrap admin panel,dashboard admin bootstrap,bootstrap admin dashboard">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="{{ asset('assets/js/authentication-main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('assets/css/styles.min.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" >
    <script src="{{ asset('assets/sweetalert/js/sweetalert.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/sweetalert/css/sweetalert.css') }}">


</head>

<body>
    <div class="autentication-bg">

        <div class="container-lg">
            <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">

                    <div class="card custom-card">
                        <div class="card-body p-5">
                            <p class="h5 fw-semibold mb-2 text-center">Silahkan Login Ke Logbook</p>
                            <div class="row gy-3">
                                <form action="{{ asset('login') }}" method="post" accept-charset="utf-8" class="row g-3 needs-validation" novalidate>
                                    {{ csrf_field() }}
                                 @if ($errors->has('username'))
                                 <div class="alert alert-danger">{{ $errors->first('username') }}</div>
                                 @endif
                                <div class="col-xl-12">
                                    <label for="signin-username" class="form-label text-default">User Name</label>
                                    <input type="text" name="username" class="form-control form-control-lg" id="signin-username" placeholder="user name">
                                </div>
                               
                                @if ($errors->has('password'))
                                <div class="alert alert-danger">{{ $errors->first('password') }}</div>

                                @endif
                                    <div class="col-xl-12 mb-2">
                                    <label for="signin-username" class="form-label text-default">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control form-control-lg" id="signin-password" placeholder="password">
                                        <button class="btn btn-light" type="button" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                 
                                </div>
                              
                                
                                <div class="col-xl-12 d-grid mt-2">
                                        <button class="btn btn-lg btn-primary" type="submit">Login</button>
                                      
                                </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom-Switcher JS -->
    <script src="{{ asset('assets/js/custom-switcher.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Show Password JS -->
    <script src="{{ asset('assets/js/show-password.js')}}"></script>
    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
        })
    </script>
@endif
@if(session('succses'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: '{{ session('succses') }}',
    })
</script>
@endif

</body>

</html>