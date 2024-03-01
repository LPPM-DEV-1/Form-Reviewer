<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tabel.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Sidebar -->
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="{{ route('reviewer.index') }}" class="nav-link align-middle px-0">
                                <i class="logo-navigasi fs-4 bi-person"></i> <span class="navigasi ms-1 d-none d-sm-inline">Reviewer</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('peneliti.index') }}" class="nav-link px-0 align-middle">
                                <i class="logo-navigasi fs-4 bi-people"></i> <span class="navigasi ms-1 d-none d-sm-inline">Peneliti</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('form.index') }}" class="nav-link px-0 align-middle">
                                <i class="logo-navigasi fs-4 bi bi-ui-checks"></i> <span class="navigasi ms-1 d-none d-sm-inline">Pengaturan Form</span> 
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="nav-pills pb-4">
                        <a class="btn" href="{{ route('welcome') }}"><span class="navigasi">Logout</span></a>
                    </div>
                </div>
            </div>
            <!-- Sidebar End -->
            @yield('content')
        </div>
    </div>
</body>
</html>