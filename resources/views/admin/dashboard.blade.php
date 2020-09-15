@extends('layouts.master')

@section('title', 'Dashboard')
    
@section('content')
  <!-- Main container starts -->
  <div class="container main-container" id="main-container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons bg-primary md-36 icon-50">monetization_on</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Total Profit</p>
                            <h4 class="font-weight-light"><small>$</small> 25,410</h4>
                        </div>
                    </div>
                    <div class="progress h-5 mt-2">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-center">
                            <i class="material-icons icons bg-danger md-36 icon-50">remove_from_queue</i>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-0">Total Loss</p>
                            <h4 class="font-weight-light"><small>$</small> 15,410</h4>
                        </div>
                    </div>
                    <div class="progress h-5 mt-2">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <p class="mb-0">Total Deals</p>
                            <h4 class="font-weight-light">15410 <small>+15%</small></h4>
                        </div>
                        <div class="col-auto text-center pl-0">
                            <i class="material-icons icons bg-warning md-36 icon-50">language</i>
                        </div>
                    </div>
                    <div class="progress h-5 mt-2">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header border-0 bg-none">
                    <div class="row">
                        <div class="col">
                            <p class="fs15">User Session Overview<br><small class="text-template-primary-light">Per Quarter</small></p>
                        </div>
                        <form class="form-inline search align-self-center">
                            <input class="form-control form-control-sm" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-link btn-sm" type="submit"><i class="material-icons">search</i></button>
                        </form>
                        <div class="col-auto">
                            <button class="btn btn-sm btn-outline-template">
                                <i class="material-icons md-18 mr-2">print</i> Print
                            </button>
                            <button class="btn btn-sm btn-outline-template ml-2">
                                <i class="material-icons md-18 mr-2">cloud_download</i> Export
                            </button>
                            <div class="dropdown d-inline-block  ml-2">
                                <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br>
                    <div class="areachart">
                        <canvas id="mixedchartjs"></canvas>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-auto">
                            <div class="row">
                                <div class="col-auto">
                                    <i class="material-icons text-template-primary fs15 vm">album</i>
                                </div>
                                <div class="col pl-0">
                                    <p>IT User <small class="d-block"><span class="text-template-primary">25600</span></small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto border-left-dashed">
                            <div class="row">
                                <div class="col-auto">
                                    <i class="material-icons text-success fs15 vm">album</i>
                                </div>
                                <div class="col pl-0">
                                    <p>Non-IT <small class="d-block"><span class="text-template-primary">6548</span></small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto border-left-dashed">
                            <div class="row">
                                <div class="col-auto">
                                    <i class="material-icons text-danger fs15 vm">album</i>
                                </div>
                                <div class="col pl-0">
                                    <p>Trainee <small class="d-block"><span class="text-template-primary">15548</span></small></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
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
    </div>
</div>
    <!-- Main container ends -->
@endsection