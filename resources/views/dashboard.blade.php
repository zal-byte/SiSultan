<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/icon/bs-icon/bootstrap-icons.css')}}">
    <title>Dashboard</title>
</head>
<style type="text/css">
    .nav-link{
        color: white !important;
    }
    .nav-link i{
        color: blue;
    }
    .nav-link span{
        color: blue;
    }
    hr{
        clear: both;
        display: block;
        border: 0;
        width: 100%;
        background-color: white;
        height: 1px;
    }
</style>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a href="{{route('input_data_hasil_hutan')}}" class="nav-link align-middle px-0">
                            <span class="fa fa-solid fa-add"></span>
                            Input Data Industri
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <span class="fa fa-solid fa-file"></span>
                            Data Wilayah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-items-center px-0">
                            <span class="fa fa-solid fa-file"></span>
                            Data Profile Daerah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <span class="fa fa-solid fa-file"></span>
                            Data Lokasi Wisata
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a onclick="$('#logoutModal').modal('show');" class="nav-link">
                            <span class="fa fa-solid fa-sign-out">
                            </span>
                            Keluar
                        </a>
                    </li>
                </ul>
                


            </div>
        </div>
        <div class="col py-3">
            @yield('body_dashboard')
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="logoutModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fa fa-solid fa-2x fa-sign-out"></span>
                    <h3 class="font-weight-bold">
                        Keluar ?
                    </h3>
                </div>
                <div class="modal-body">
                    <p class="text-center">
                        Apakah kamu yakin ingin keluar?
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="{{route('logout')}}">
                        <button class="btn btn-secondary">
                            Keluar
                        </button>
                    </a>
                    <a onclick="$('#logoutModal').modal('hide');">
                        <button class="btn btn-primary text-white">
                            Batal
                        </button>   
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>