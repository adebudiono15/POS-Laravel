<!DOCTYPE html>
<html lang="en">

<!-- Head tag -->

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | PT. Dobha Putra Salim</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Worlds Best Admin UX Dashbaoard PRO version for bootstrap template, Select, Calandar, Report, Charts, Tables etc." name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="../assets/img/newlogo.png">

    <!-- g fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
    <!-- g fonts style ends -->

    <!-- Vendor or 3rd party style -->

    <!-- material icons -->
    <link href="{{ url('assets/vendor/material-icons/material-icons.css') }}" rel="stylesheet">
    <!-- flags icons -->
    <link href="{{ url('assets/vendor/flags/css/flag-icon.min.css') }}" rel="stylesheet">
    <!-- daterange picker -->
    <link href="{{ url('assets/vendor/daterangepicker-master/daterangepicker.css') }}" rel="stylesheet">
    <!-- vector mapr -->
    <link href="{{ url('assets/vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet">
    <!-- dataTables picker -->
    <link href="{{ url('assets/vendor/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/DataTables-1.10.18/css/responsive.dataTables.min.css') }}" rel="stylesheet">

    <!-- Vendor or 3rd party style ends -->

    <!-- Customized template style mandatory -->
    <link href="{{ url('assets/css/style-darkblue-dark.css') }}" rel="stylesheet" id="stylelink">
    <!-- Customized template style ends -->

    {{-- SELECT 2 --}}
    <link href="{{ url('assets/css/select2.min.css') }}" rel="stylesheet" />

    @stack('css-style')
</head>

<!-- Head tag ends -->

<!-- Body -->

<body class="sidemenu-open header-fixed-top">
    <div class="loader container-fluid">
        <div class="row h-100">
            <div class="col-auto align-self-center  mx-auto text-center">
                <div class="loader-ripple"><div></div><div></div></div>
                <h2>Sistem Penjualan Marhaban Store</h2>
                <p>PT. Dobha Putra Salim</p>
            </div>
        </div>
    </div>

    <!-- Sidebar starts -->
   @include('layouts.sidebar')
    <!-- Sidebar ends -->

    <!-- wrapper starts -->
    <div class="wrapper">

        <div class="content shadow-sm">
    @include('layouts.navbar')
    <!-- Main container starts -->
    @yield('content')
    <!-- Main container ends -->
        </div>

    </div>
    @include('layouts.footer')
    <!-- wrapper ends -->

    <!-- Theme style picker modal window and options -->
    <div class="wrap-fixed-float wrap-fixed-bottom-right">
        <button class="btn btn-primary btn-rounded-circle shadow" data-target="#themepicker" data-toggle="modal"><i class="material-icons vm">style</i><span class="counter-small bg-danger"></span></button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="themepicker" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg-dark overflow-hidden">
                <button type="button" class="closePersonalize" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                    <div class="background h-320">
                        <img src="../assets/img/background-part.png" alt="">
                    </div>
                    <div class="text-center pb-5">
                        <h1 class="mt-3 mb-0 text-white">Personalize</h1>
                        <h4 class="mb-5 text-white font-weight-light">Make it more like yours</h4>
                    </div>

                    <div class="row top-60">
                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="card border-0 shadow bg-white h-100">
                                <div class="card-body text-center">
                                    <i class="avatar avatar-60 md-36 material-icons text-template-primary my-3">format_shapes</i>
                                    <h6 class="mb-3">Font Size</h6>
                                    <div class="row">
                                        <div class="col-12 px-0">
                                            <ul class="list-group list-group-flush mb-0 text-left">
                                                <li class="list-group-item">
                                                    XS
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="radio" name="fontsize" class="custom-control-input" id="xsmallfs">
                                                        <label class="custom-control-label" for="xsmallfs"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    S
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="radio" name="fontsize" class="custom-control-input" id="smallfs" checked>
                                                        <label class="custom-control-label" for="smallfs"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    M
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="radio" name="fontsize" class="custom-control-input" id="mediumfs">
                                                        <label class="custom-control-label" for="mediumfs"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    L
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="radio" name="fontsize" class="custom-control-input" id="largefs">
                                                        <label class="custom-control-label" for="largefs"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="card border-0 shadow bg-white h-100">
                                <div class="card-body text-center">
                                    <i class="avatar avatar-60 md-36 material-icons bg-light-warning text-warning my-3">style</i>
                                    <h6 class="mb-3">Sidebar</h6>
                                    <div class="row">
                                        <div class="col-12 px-0">
                                            <ul class="list-group list-group-flush mb-0 text-left">
                                                <li class="list-group-item">
                                                    Normal
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="radio" name="sidebar" class="custom-control-input" id="sidebarfull" checked>
                                                        <label class="custom-control-label" for="sidebarfull"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    Compact
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="radio" name="sidebar" class="custom-control-input" id="sidebarCompact">
                                                        <label class="custom-control-label" for="sidebarCompact"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    Iconic
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="radio" name="sidebar" class="custom-control-input" id="sidebarIconic">
                                                        <label class="custom-control-label" for="sidebarIconic"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    Fill Color
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="checkbox" class="custom-control-input" id="sidebarFill">
                                                        <label class="custom-control-label" for="sidebarFill"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="card border-0 shadow bg-white h-100">
                                <div class="card-body text-center">
                                    <i class="avatar avatar-60 md-36 material-icons bg-light-danger text-danger my-3">menu</i>
                                    <h6 class="mb-3">Header</h6>
                                    <div class="row">
                                        <div class="col-12 px-0">
                                            <ul class="list-group list-group-flush mb-0 text-left">
                                                <li class="list-group-item">
                                                    Fixed Top
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="checkbox" class="custom-control-input" id="headerfixed">
                                                        <label class="custom-control-label" for="headerfixed"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    Fixed Width
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="checkbox" class="custom-control-input" id="headercontainer">
                                                        <label class="custom-control-label" for="headercontainer"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    Fill Color
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="checkbox" class="custom-control-input" id="headerfillcolor">
                                                        <label class="custom-control-label" for="headerfillcolor"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="card border-0 shadow bg-white h-100">
                                <div class="card-body text-center">
                                    <i class="avatar avatar-60 md-36 material-icons bg-light-success text-success my-3">subtitles</i>
                                    <h6 class="mb-3">Content</h6>
                                    <div class="row">
                                        <div class="col-12 px-0">
                                            <ul class="list-group list-group-flush mb-0 text-left">
                                                <li class="list-group-item">
                                                    Square
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="checkbox" name="sidebar" class="custom-control-input" id="wrapperCorner">
                                                        <label class="custom-control-label" for="wrapperCorner"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    Full Width
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="checkbox" name="sidebar" class="custom-control-input" id="contentWidth">
                                                        <label class="custom-control-label" for="contentWidth"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    Spacious
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="checkbox" name="sidebar" class="custom-control-input" id="moderntouch">
                                                        <label class="custom-control-label" for="moderntouch"></label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    Fullscreen
                                                    <div class="custom-control custom-switch float-right">
                                                        <input type="checkbox" name="sidebar" class="custom-control-input" id="fullscreen">
                                                        <label class="custom-control-label" for="fullscreen"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer border-0 pt-0">
                    <div class="row w-100 mx-0">
                        <div class="col-12 col-md-6 text-center">
                            <h6><i class="material-icons vm mr-1">brightness_2</i> Dark</h6>
                            <div class="avatar avatar-30 bg-dark style-picker" data-target='style-black-dark'></div>
                            <div class="avatar avatar-30 bg-darkblue style-picker" data-target='style-darkblue-dark'></div>
                            <div class="avatar avatar-30 bg-purple style-picker" data-target='style-purple-dark'></div>
                            <div class="avatar avatar-30 bg-blue style-picker" data-target='style-blue-dark'></div>
                            <div class="avatar avatar-30 bg-green style-picker" data-target='style-green-dark'></div>
                            <div class="avatar avatar-30 bg-pista style-picker" data-target='style-pista-dark'></div>
                            <div class="avatar avatar-30 bg-orange style-picker" data-target='style-orange-dark'></div>
                            <div class="avatar avatar-30 bg-tomato style-picker" data-target='style-tomato-dark'></div>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <h6><i class="material-icons vm mr-1">brightness_7</i> Light</h6>
                            <div class="avatar avatar-30 bg-dark style-picker" data-target='style-black-light'></div>
                            <div class="avatar avatar-30 bg-darkblue style-picker" data-target='style-darkblue-light'></div>
                            <div class="avatar avatar-30 bg-purple style-picker" data-target='style-purple-light'></div>
                            <div class="avatar avatar-30 bg-blue style-picker" data-target='style-blue-light'></div>
                            <div class="avatar avatar-30 bg-green style-picker" data-target='style-green-light'></div>
                            <div class="avatar avatar-30 bg-pista style-picker" data-target='style-pista-light'></div>
                            <div class="avatar avatar-30 bg-orange style-picker" data-target='style-orange-light'></div>
                            <div class="avatar avatar-30 bg-tomato style-picker" data-target='style-tomato-light'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Theme style picker modal window and options ends -->
    @stack('js-first')
    <!-- Global js mandatory -->
    <script src="{{ url('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/vendor/cookie/jquery.cookie.js') }}"></script>
    <!-- Global js ends -->

    <!-- Vendor or 3rd party js -->

    <!-- date range picker -->
    <script src="{{ url('assets/vendor/daterangepicker-master/moment.min.js') }}"></script>
    <script src="{{ url('assets/vendor/daterangepicker-master/daterangepicker.js') }}"></script>
    <!-- Chart js -->
    <script src="{{ url('assets/vendor/chartjs/Chart.min.js') }}"></script>
    <script src="{{ url('assets/vendor/chartjs/utils.js') }}"></script>
    <!-- Circular progress js  -->
    <script src="{{ url('assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Sparklines js  -->
    <script src="{{ url('assets/vendor/sparklines/jquery.sparkline.min.js') }}"></script>
    <!-- gaugechart js  -->
    <script src="{{ url('assets/vendor/gauge-chart/gauge.min.js') }}"></script>
    <!-- DataTables js  -->
    <script src="{{ url('assets/vendor/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/vendor/DataTables-1.10.18/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/vendor/DataTables-1.10.18/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- vector maps js  -->
    <script src="{{ url('assets/vendor/jquery-jvectormap/jquery-jvectormap.js') }}"></script>
    <script src="{{ url('assets/vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- Vendor or 3rd party js ends -->

    <!-- Customized template js mandatory -->
    <script src="{{ url('assets/js/main.js') }}"></script>
    <!-- Customized template js ends -->

    <!-- theme picker -->
    <script src="{{ url('assets/js/style-picker.js') }}"></script>
    <!-- theme picker ends -->

    <!-- Customized page level js -->
    <script src="{{ url('assets/js/networking-dashboard.js') }}"></script>
    <script>
    </script>
    <!-- Customized page level js ends -->

    {{-- session --}}
    <script src="{{ url('assets/js/sweat.js') }}"></script>
    <script>
        @if(Session::has('success'))
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Berhasil Menambah Data',
        showConfirmButton: false,
        timer: 2500
        })
        @endif

        @if(Session::has('lebih'))
        Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Pembayaran Lebih Dari Sisa',
        showConfirmButton: false,
        timer: 2800
        })
        @endif

        @if(Session::has('ups'))
        Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'UPS....',
        title: 'Ada Barang Yang Kurang Stok-nya.',
        showConfirmButton: false,
        timer: 2800
        })
        @endif

        @if(Session::has('update'))
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Data Berhasil Diupdate',
        showConfirmButton: false,
        timer: 2500
        })
        @endif

        @if(Session::has('delete'))
        Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Data Berhasil Dihapus',
        showConfirmButton: false,
        timer: 2500
        })
        @endif

        @if(Session::has('waring'))
        Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'Data Berhasil Dihapus',
        showConfirmButton: false,
        timer: 2500
        })
        @endif
    </script>

    {{-- select2 --}}
    <script src="{{ url('assets/js/select2.js') }}"></script>
    @stack('js-second')
</body>

<!-- Body ends -->

</html>
