<div class="container-fluid header-container">
    <div class="row header">
        <div class="container-fluid " id="header-container">
            <div class="row">
                <!-- Header starts -->
                <nav class="navbar col-12 navbar-expand ">
                    <button class="menu-btn btn btn-link btn-sm" type="button">
                        <i class="material-icons">menu</i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  

                        <!-- large desktop market rates starts -->
                        <div class="mx-auto d-none d-xxl-inline">
                            <div class="row mx-0">
                                <div class="col-auto pr-0 align-self-center"><i class="material-icons vm">public</i></div>
                                <div class="col-auto">
                                    <h5 class="fs15 font-weight-normal mb-0">Market <span class="text-danger mx-1"><i class="material-icons vm">arrow_drop_down</i></span> 254608 $</h5>
                                    <p class="fs11"><span>Live</span> <span class="text-danger">-0.1%</span> <span>(2487 $)</span></p>
                                </div>
                                <div class="col-auto border-left-dashed">
                                    <h5 class="fs15 font-weight-normal mb-0">Update <span class="text-success mx-1"><i class="material-icons vm">arrow_drop_up</i></span> 254608 $</h5>
                                    <p class="fs11"><span>Live</span> <span class="text-success">+0.1%</span> <span>(2487 $)</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- large desktop market rates ends -->

                        <!-- icons dropwdowns starts -->
                        <ul class="navbar-nav ml-auto">
                            <?php
                            $stock = \DB::select("SELECT * FROM barang where stock < 1");
                            ?>
                            <?php
                            $minimal_stock = \DB::select("SELECT * FROM barang where stock < 10");
                            ?>
                            <!-- cart dropdown-->
                            <li class="nav-item dropdown d-none d-sm-flex">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">local_mall</i>
                                    @foreach ($minimal_stock as $item)
                                    <span class="counter-small bg-danger"></span>
                                    @endforeach
                                </a>
                                <div class="dropdown-menu dropdown-menu-center no-defaults pt-0 overflow-hidden" aria-labelledby="navbarDropdown3">
                                    <div class="dropdown-item border-top">
                                        @foreach ($minimal_stock as $item)
                                        <div class="col">
                                        <div class="row ">
                                            <p>Stock <b>{{ $item->nama_barang }}</b> tersisa {{ $item->stock }} lagi.</p>
                                        </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>


                            <!-- message dropdown-->
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">email</i>
                                    <span class="counter bg-danger">{{ count($stock) }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm-left dropdown-menu-center no-defaults pt-0 overflow-hidden" aria-labelledby="navbarDropdown5">
                                    <div class="position-relative text-center rounded">
                                        <div class="background">
                                            <img src="../assets/img/background-part.png" alt="">
                                        </div>
                                        <div class="py-3 text-white">
                                            <h5 class="font-weight-normal">PESAN</h5>
                                            <p>Update Stok Barang</p>
                                        </div>

                                    </div>
                                    <div class="scroll-y h-320 d-block">
                                        <a class="dropdown-item border-top new" href="#">
                                            @foreach ($stock as $item)
                                            <div class="row">
                                                <div class="col-auto align-self-center">
                                                    <i class="material-icons text-template-primary">local_mall</i>
                                                </div>
                                                <div class="col pl-0">
                                                    <div class="row mb-1">
                                                        <div class="col">
                                                            <p class="mb-0">{{ $item->nama_barang }}</p>
                                                        </div>
                                                    </div>
                                                    <p class="small text-mute">Stok {{ $item->nama_barang }} sudah habis. </p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <!-- profile dropdown-->
                            <li class="nav-item dropdown ml-0 ml-sm-4">
                                <a class="nav-link dropdown-toggle profile-link" href="#" id="navbarDropdown6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <figure class="rounded avatar avatar-30">
                                        <img src="../assets/img/user1.png" alt="">
                                    </figure>
                                    <div class="username-text ml-2 mr-2 d-none d-lg-inline-block">
                                        <h6 class="username"><span>Welcome,</span>Maxartkiller</h6>
                                    </div>
                                    <figure class="rounded avatar avatar-30 d-none d-md-inline-block">
                                        <i class="material-icons">expand_more</i>
                                    </figure>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right w-300 pt-0 overflow-hidden" aria-labelledby="navbarDropdown6">
                                    <div class="position-relative text-center rounded py-5">
                                        <div class="background">
                                            <img src="../assets/img/background-part.png" alt="">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3 top-60 z-2">
                                        <figure class="avatar avatar-120 mx-auto shadow"><img src="../assets/img/user1.png" alt=""></figure>
                                    </div>
                                    <h5 class="text-center mb-0">Maxartkiller</h5>
                                    <a class="dropdown-item border-top" href="#">
                                        <div class="row">
                                            <div class="col-auto align-self-center">
                                                <i class="material-icons text-danger">exit_to_app</i>
                                            </div>
                                            <div class="col pl-0">
                                                <p class="mb-0 text-danger">Logout</p>
                                            </div>
                                            <div class="col-auto align-self-center text-right pl-0">
                                                <i class="material-icons text-mute small text-danger">chevron_right</i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- icons dropwdowns starts -->
                    </div>
                </nav>
                <!-- Header ends -->
            </div>
        </div>
    </div>
    <div class="row submenu">
        <div class="container-fluid " id="submenu-container">
            <div class="row">
                <!-- Submenu section starts -->
                {{-- <nav class="navbar col-12 ">
                    <div class="dropdown mr-auto d-flex d-sm-none">
                        <button class="btn dropdown-toggle btn-sm btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dashboard
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="#">Featured</a>
                            <a class="dropdown-item" href="#">popular</a>
                        </div>
                    </div>
                    <ul class="nav nav-pills mr-auto d-none d-sm-flex">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Featured</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">popular</a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills ml-auto d-none d-xl-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Today</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">This week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">This Month</a>
                        </li>
                    </ul>
                    <form class="form-inline ml-auto ml-sm-3">
                        <div id="daterangeadminux" class="form-control form-control-sm">
                            <span></span> <i class="material-icons avatar avatar-26 text-template-primary cal-icon">event</i>
                        </div>

                    </form>
                </nav> --}}
                <!-- Submenu section ends -->
            </div>
        </div>
    </div>
</div>