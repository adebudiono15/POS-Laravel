@extends('layouts.master')

@section('title', 'DF'.$title)

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
                        Order Id: <b>{{ $inv }}</b>
                        <br> Faktur Id: <b>{{ $title }}</b>
                        <br>Tanggal Transaksi : {{ date('d M Y ', strtotime ($penjualan_kredit->created_at)) }}
                    </div>
                </div>
            </div>
            <div class="card-body" style="color: rgb(51, 51, 51)">
                <div class="row mb-4">
                    <div class="col-12 col-md-6">
                        <p class="mb-2 font-weight-bold text-grey">Dari</p>
                        <p class="">PT. Dobha Putra Salim
                            <br> Jl. Pulo Empang No.12, Bogor Selatan, Kota Bogor
                            <br> marketing@dobha.com
                            <br> 0857-2075-1309</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="mb-2 font-weight-bold">Kepada Yth,</p>
                        <p class="">{{ $penjualan_kredit->nama_customer }}
                            <br> {{ $penjualan_kredit->alamat }}
                            <br> {{ $penjualan_kredit->telepon }}
                    </div>
                </div>
            
                <h3 class="text-center mb-4">DETAIL PEMBELIAN</h3>
                <form action="{{ url('transaksi-penjualan-kredit/'.$penjualan_kredit->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
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
                        @foreach ($penjualan_kredit->lines as $item)
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
                            <td colspan="2" class="text-right" style="color: rgb(51, 51, 51)"><b>Rp. {{ number_format($penjualan_kredit->grand_total,0) }}</b></td>
                        </tr>
                        <tr>
                            @if ($penjualan_kredit->sisa > 1)
                            <td colspan="2" style="color: rgb(51, 51, 51)"><b>SISA</b></td>
                            <td colspan="2" class="text-right" style="color: rgb(51, 51, 51)"><b>Rp. {{ number_format($penjualan_kredit->sisa,0) }}</b></td>
                            @endif
                            @if ($penjualan_kredit->sisa == 0)
                            <td colspan="2" style="color: rgb(51, 51, 51)"><b>STATUS</b></td>
                            <td colspan="2" class="text-right" style="color: rgb(51, 51, 51)"><b>LUNAS</b></td>
                            @endif
                        </tr>
                    </tfoot>
                </table>
                <br>
                <p>We recommend power services for our customers</p>
                <br>
            </div>
        </div>
    </div>
</div>
    @if ($penjualan_kredit->sisa > 1)
    <div class="row ml-1 mb-4">
        <div class="col-4">
            <label for="">CICIL/BAYAR</label>
            <input type="hidden" name="total_sisa" value="{{ $penjualan_kredit->sisa }}">
            <input type="hidden" name="id_penjualan" value="{{ $penjualan_kredit->id }}">
            <input type="hidden" name="no_struk" value="{{ $title }}">
            <input type="number" class="form-control" name="bayar" style="height:28px">
            <button type="submit" class="btn btn-sm btn-outline-template mt-4"  style="height:28px">
                Update Data
            </button>
        </div>
    </div>
    @endif
</form>
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