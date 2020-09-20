

<!-- Sidebar starts -->
<div class="sidebar">
    <!-- Logo sidebar -->
    <div class="logo text-center">
        <img src="{{ url('assets/img/logo-putih.png') }}" alt="" width="70" height="70" class="logo-icon">
    </div>
    <!-- Logo sidebar ends -->

    <!-- Navigation menu sidebar-->
    <h6 class="subtitle fs11"></h6>
    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url("/dashboard") }}"><i class="material-icons icon">dashboard</i><span>Dashboard</span> </a>
        </li>
    </ul>
    
    {{-- <h6 class="subtitle fs11">TRANSAKSI TUNAI</h6>
    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url("/master-penjualan") }}"><i class="material-icons icon">attach_money</i><span>Penjualan</span> </a>
        </li>
    </ul>

    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url("/master-pembelian") }}"><i class="material-icons icon">shopping_basket</i><span>Pembelian</span> </a>
        </li>
    </ul>

    <h6 class="subtitle fs11">TRANSAKSI KREDIT</h6>
    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url("/master-penjualan-kredit") }}"><i class="material-icons icon">add_shopping_cart</i><span>Penjualan</span> </a>
        </li>
    </ul>

    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url("/master-pembelian-kredit") }}"><i class="material-icons icon">store</i><span>Pembelian</span> </a>
        </li>
    </ul> --}}

    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)"><i class="material-icons icon">store</i><span>Transaksi</span> <i class="material-icons arrow">expand_more</i></a>
            <div class="nav flex-column">
                <h6 class="subtitle fs11 text-white badge badge-success">TRANSAKSI TUNAI</h6>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url("/master-penjualan") }}"><span>Penjualan Tunai</span></a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url("/master-pembelian") }}"><span>Pembelian Tunai</span></a>
                </div>
                <h6 class="subtitle fs11 text-white badge badge-warning">TRANSAKSI KREDIT</h6>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url("/master-penjualan-kredit") }}"><span>Penjualan Kredit</span></a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url("/master-pembelian-kredit") }}"><span>Pembelian Kredit</span></a>
                </div>
            </div>
        </li>
    </ul>

    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)"><i class="material-icons icon">library_books</i><span>Master Data</span> <i class="material-icons arrow">expand_more</i></a>
            <div class="nav flex-column">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('barang') }}"><span>Barang</span></a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('customer') }}"><span>Customer</span></a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('kategori') }}"><span>Kategori</span></a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('supplier') }}"><span>Supplier</span></a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('satuan') }}"><span>Satuan</span></a>
                </div>
            </div>
        </li>
    </ul>
   
</div>
<!-- Sidebar ends -->