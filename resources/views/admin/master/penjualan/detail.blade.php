@extends('layouts.master')

@section('title', 'DF'.$inv)

@section('content')
<div class="container main-container" id="main-container">
    <div class="card mb-4 border-0" style="background-color: #fff">
        <div id="print" >
        <div class="card-header border-1 py-4" style="color: rgb(51, 51, 51)">
                <div class="row">
                        <div class="col font-weight-bold"><h4></h4>
                            <img src="{{ url('assets/img/newlogo.png') }}" height="70" alt="">
                        </div>
                    <div class="col text-right">
                        <br> No Faktur: <b>{{ $inv }}</b>
                        <br>Tanggal Transaksi : {{ date('d M Y ', strtotime ($penjualan->created_at)) }}
                    </div>
                </div>
            </div>
            <div class="card-body" style="color: rgb(51, 51, 51)">
                <div class="row mb-4">
                    <div class="col-12 col-md-6">
                        <p class="mb-2 font-weight-bold text-grey">Dari</p>
                        <p class="" style="font-size: 12px">PT. Dobha Putra Salim
                            <br> Jl. Pulo Empang No.12, Bogor Selatan, Kota Bogor
                            <br> marketing@dobha.com
                            <br> 0857-2075-1309</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="mb-2 font-weight-bold">Kepada Yth,</p>
                        <p class="" style="font-size: 12px">{{ $penjualan->nama_customer }}
                            <br> {{ $penjualan->alamat }}
                            <br> {{ $penjualan->telepon }}
                    </div>
                </div>
            
                <h6 class="text-center mb-4">DETAIL PEMBELIAN</h6>
                <table class="table table-borderless mb-0" style="font-size: 12px">
                    <thead>
                        <tr class="bg-light-secondary">
                            <th style="color: rgb(51, 51, 51)"><b>NAMA</b></th>
                            <th class="text-center" style="color: rgb(51, 51, 51)"><b>QTY</b></th>
                            <th class="text-center" style="color: rgb(51, 51, 51)"><b>HARGA</b></th>
                            <th class="text-right" style="color: rgb(51, 51, 51)"><b>SUB TOTAL</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penjualan->lines as $item)
                        <tr>
                            <td style="color: rgb(51, 51, 51)">{{ $item->namas->nama_barang }}</td>
                            <td class="text-center" style="color: rgb(51, 51, 51)">{{ $item->qty }}</td>
                            <td class="text-right" style="color: rgb(51, 51, 51)">Rp. {{ number_format($item->harga,0) }}</td>
                            <td class="text-right" style="color: rgb(51, 51, 51)">Rp. {{ number_format($item->grand_total,0) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="font-weight-bold bg-light-secondary">
                            <td colspan="2" style="color: rgb(51, 51, 51)">GRAND TOTAL</td>
                            <td colspan="2" class="text-right" style="color: rgb(51, 51, 51)"><b>Rp. {{ number_format($penjualan->grand_total,0) }}</b></td>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <p style="font-size: 9px"><b>* Terimakasih Telah Belanja Di Marhaban Store</b></p>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="card-footer border-top">
    <a href="{{ route('penjualan') }}">
        <button class="btn btn-warning btn-sm"><i class="material-icons ml-2">keyboard_backspace</i>Kembali</button>
    </a>
    <button onclick="printContent('print')" class="btn btn-primary btn-sm"><i class="material-icons mr-2">print</i>Print</button>
</div>
@endsection

@push('js-second')
<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>
@endpush