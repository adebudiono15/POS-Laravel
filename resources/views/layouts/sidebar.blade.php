

<!-- Sidebar starts -->
<div class="sidebar">
    <!-- Logo sidebar -->
    <div class="logo">
        <img src="/assets/img/logo-putih.png" alt="" width="100" height="100" class="logo-icon">
    </div>
    <!-- Logo sidebar ends -->

    <!-- Navigation menu sidebar-->
    <h6 class="subtitle fs11"></h6>
    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url("/dashboard") }}"><i class="material-icons icon">dashboard</i><span>Dashboard</span> </a>
        </li>
    </ul>

    <h6 class="subtitle fs11">TRANSAKSI</h6>
    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url("/penjualan") }}"><i class="material-icons icon">attach_money</i><span>Penjualan</span> </a>
        </li>
    </ul>

    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url("/pembelian") }}"><i class="material-icons icon">shopping_basket</i><span>Pembelian</span> </a>
        </li>
    </ul>

    <h6 class="subtitle fs11">DATA</h6>
    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)"><i class="material-icons icon">library_books</i><span>Master</span> <i class="material-icons arrow">expand_more</i></a>
            <div class="nav flex-column">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"><span>Customer</span></a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"><span>Barang</span></a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"><span>Supplier</span></a>
                </div>
            </div>
        </li>
    </ul>
   
</div>
<!-- Sidebar ends -->