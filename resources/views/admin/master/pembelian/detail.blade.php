@extends('layouts.master')

@section('title', 'DP'.$title)

@section('content')
<div class="container main-container" id="main-container">
    <div class="card mb-4 border-0" style="background-color: #fff">
        <div id="print" >
        <div class="card-header border-1 py-4" style="color: rgb(51, 51, 51)">
                <div class="row">
                        <div class="col font-weight-bold"><h4></h4>
                            <img src="{{ url('assets/img/newlogo.png') }}" height="100" alt="">
                        </div>
                    <div class="col text-right">
                        <br> Faktur Id: <b>{{ $title }}</b>
                        <br>Tanggal Transaksi : {{ date('d M Y ', strtotime ($pembelian->created_at)) }}
                    </div>
                </div>
            </div>
            <div class="card-body" style="color: rgb(51, 51, 51)">
                <div class="row mb-4">
                    <div class="col-12 col-md-6">
                        <p class="mb-2 font-weight-bold">Supplier:</p>
                        <p class="">{{ $pembelian->nama_supplier->nama_supplier }}
                        <p class="mb-2 font-weight-bold">ID Transaksi:</p>
                        <p class="">{{ $inv }}
                    </div>
                </div>
            
                <h3 class="text-center mb-4">DETAIL PEMBELIAN</h3>
                <table class="table table-borderless mb-0">
                    <thead>
                        <tr class="bg-light-secondary">
                            <th style="color: rgb(51, 51, 51)"><b>NAMA</b></th>
                            <th class="text-center" style="color: rgb(51, 51, 51)"><b>QTY</b></th>
                            <th class="text-center" style="color: rgb(51, 51, 51)"><b>HARGA</b></th>
                            <th class="text-right" style="color: rgb(51, 51, 51)"><b>SUB TOTAL</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $total = 0;
                        ?>
                        @foreach ($pembelian->lines as $item)
                        <?php
                        $total += $item->grand_total;
                        ?>
                        <tr>
                            <td style="color: rgb(51, 51, 51)">{{ $item->barangs->nama_barang }}</td>
                            <td class="text-center" style="color: rgb(51, 51, 51)">{{ $item->qty }}</td>
                            <td class="text-right" style="color: rgb(51, 51, 51)">Rp. {{ number_format($item->harga_beli,0) }}</td>
                            <td class="text-right" style="color: rgb(51, 51, 51)">Rp. {{ number_format($item->grand_total,0) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="font-weight-bold bg-light-secondary">
                            <td colspan="2" style="color: rgb(51, 51, 51)">GRAND TOTAL</td>
                            <td colspan="2" class="text-right" style="color: rgb(51, 51, 51)"><b>Rp. {{ number_format($total,0) }}</b></td>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="card-footer border-top">
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