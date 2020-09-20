@extends('layouts.master')

@section('title', 'Dashboard')
    
@section('content')
  <!-- Main container starts -->
  <div class="container main-container" id="main-container">
    <span class="badge badge-primary mb-2" style="font-size: 17px"><b>TRANSAKSI TUNAI</b></span>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons  md-36 icon-50">monetization_on</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Penjualan Hari Ini</p>
                            <h4 class="font-weight-light"><small>Rp. {{ number_format($tot_pendapat_hari_ini,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons md-36 icon-50">shopping_cart</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Penjualan Bulan Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_pendapat_bulanan,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <p class="mb-0">Penjualan Tahun Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_pendapat_tahunan,0)  }}</small></h4>
                        </div>
                        <div class="col-auto text-center pl-0">
                            <i class="material-icons icons md-36 icon-50">language</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <p class="mb-0">Transaksi Penjualan Tahun Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>{{ $tot_transaksi_tahunan  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons md-36 icon-50">store</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Pembelian Hari Ini</p>
                            <h4 class="font-weight-light"><small>Rp. {{ number_format($tot_pembelian_hari_ini,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons md-36 icon-50">shopping_basket</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Pembelian Bulan Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_pembelian_bulanan,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <p class="mb-0">Pembelian Tahun Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_pembelian_tahunan,0)  }}</small></h4>
                        </div>
                        <div class="col-auto text-center pl-0">
                            <i class="material-icons icons md-36 icon-50">receipt</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <p class="mb-0">Transaksi Pembelian Tahun Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>{{ $tot_transaksi_pembelian_tahunan  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <span class="badge badge-danger mb-2" style="font-size: 17px"><b>TRANSAKSI KREDIT</b></span>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons  md-36 icon-50">local_mall</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Penjualan Hari Ini</p>
                            <h4 class="font-weight-light"><small>Rp. {{ number_format($tot_pendapat_kredit_hari_ini,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons md-36 icon-50">arrow_upward</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Penjualan Bulan Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_pendapat_kredit_bulan_ini,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <p class="mb-0">Penjualan Tahun Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_pendapat_kredit_tahun_ini,0)  }}</small></h4>
                        </div>
                        <div class="col-auto text-center pl-0">
                            <i class="material-icons icons md-36 icon-50">payments</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <p class="mb-0">Piutang</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_piutang,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons  md-36 icon-50">view_headline</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Pembelian Hari Ini</p>
                            <h4 class="font-weight-light"><small>Rp. {{ number_format($tot_pembelian_kredit_hari_ini,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons md-36 icon-50">today</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Pembelian Bulan Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_pembelian_kredit_bulan_ini,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <p class="mb-0">Pembelian Tahun Ini</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_pembelian_kredit_tahun_ini,0)  }}</small></h4>
                        </div>
                        <div class="col-auto text-center pl-0">
                            <i class="material-icons icons md-36 icon-50">folder_special</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <p class="mb-0">Hutang</p>
                            <h4 class="font-weight-light" style="font-size: 18px;"><small>Rp. {{ number_format($tot_hutang,0)  }}</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <br>
                        <div id="myChart" width="200" height="100"></div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="row">
        <div class="col-12 col-md-12">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-header border-0 bg-none">
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="fs15">Assigned Tickets and Status<br><small class="text-template-primary-light">This week vs Last week</small></p>
                        </div>
                        <form class="form-inline search col-auto align-self-center px-0">
                            <input class="form-control form-control-sm" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-link btn-sm" type="submit"><i class="material-icons">search</i></button>
                        </form>
                        <div class="col-auto align-self-center">
                            <button class="btn btn-sm btn-outline-template ml-2">
                                <i class="material-icons md-18">cloud_download</i> Export
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table datatable display responsive w-100">
                        <thead>
                            <tr>
                                <th class="all">Order ID</th>
                                <th class="min-tablet">Order From</th>
                                <th class="min-desktop">Date</th>
                                <th class="">Status</th>
                                <th class="min-desktop">Order Receiver </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID0001</td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            <img src="../assets/img/user3.png" alt="">
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">John Alexandar</p>
                                            <p class="text-template-primary-light">Sydney, Australia</p>
                                        </div>
                                    </div>
                                </td>
                                <td>12-12-2019</td>
                                <td>
                                    <div class="btn-success btn btn-sm">Accepted</div>
                                </td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            <img src="../assets/img/user1.png" alt="">
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">Sonya Wilson</p>
                                            <p class="text-template-primary-light">Aquaguaard Manager</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>ID0002</td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            A
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">Anthony Desouza</p>
                                            <p class="text-template-primary-light">Sydney, Australia</p>
                                        </div>
                                    </div>
                                </td>
                                <td>12-12-2019</td>
                                <td>
                                    <div class="btn-primary btn btn-sm">Accepted</div>
                                </td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            <img src="../assets/img/user2.png" alt="">
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">Anjali Govind</p>
                                            <p class="text-template-primary-light">Aquaguaard Manager</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>ID0003</td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            M
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">Mark Zukarburgs</p>
                                            <p class="text-template-primary-light">Sydney, Australia</p>
                                        </div>
                                    </div>
                                </td>
                                <td>12-12-2019</td>
                                <td>
                                    <div class="btn-warning btn btn-sm">Accepted</div>
                                </td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            <img src="../assets/img/user3.png" alt="">
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">Syam Prashad</p>
                                            <p class="text-template-primary-light">Aquaguaard Manager</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>ID0004</td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            <img src="../assets/img/user3.png" alt="">
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">John Doe</p>
                                            <p class="text-template-primary-light">Sydney, Australia</p>
                                        </div>
                                    </div>
                                </td>
                                <td>12-12-2019</td>
                                <td>
                                    <div class="btn-danger btn btn-sm">Accepted</div>
                                </td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            S
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">Sonya Wilson</p>
                                            <p class="text-template-primary-light">Aquaguaard Manager</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>ID0005</td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            M
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">Mark Zukarburgs</p>
                                            <p class="text-template-primary-light">Sydney, Australia</p>
                                        </div>
                                    </div>
                                </td>
                                <td>12-12-2019</td>
                                <td>
                                    <div class="btn-success btn btn-sm">Accepted</div>
                                </td>
                                <td>
                                    <div class="media">
                                        <figure class="mb-0 avatar avatar-40 mr-2">
                                            <img src="../assets/img/user4.png" alt="">
                                        </figure>
                                        <div class="media-body">
                                            <p class="mb-0 template-inverse">Sonya Wilson</p>
                                            <p class="text-template-primary-light">Aquaguaard Manager</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
</div>
    <!-- Main container ends -->
@endsection

@push('js-second')
<script src="https://code.highcharts.com/highcharts.js"></script>
{{-- <script>
Highcharts.chart('myChart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tokyo',
        data: {!! json_encode($hutang) !!}

    }, {
        name: 'New York',
        data: [83.6]p

    }]
});
</script> --}}
    
@endpush