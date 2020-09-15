@extends('layouts.detailmaster')

@section('title', 'INVD-'. $title.'_'.$nama )

@push('style')
<link rel="stylesheet" href="{{ url('assets/assets/css/jquery.dataTables.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet" />
@endpush

@push('js-library')
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

@section('content')
  

        <div class="pd-20 pt-0">

            <div class="content-body">
                <!-- app invoice View Page -->
               
                <section class="invoice-view-wrapper mt-4">
                        <!-- last invoice action -->
                        <!-- invoice view page -->
                        <div class="col-xl-12 col-md-12 col-12" id="p1">
                            <div class="card invoice-print-area">
                                <div class="card-content">
                                    <div class="card-body pb-0" style="font-size: 21px;">
                                        <!-- header section -->
                                        <div class="row">
                                            <div class="col-xl-4 col-md-12">
                                                <span class="invoice-number mr-50">No Faktur</span>
                                                <span>#INVD{{ date('dmYHis', strtotime ($sales->created_at)) }}</span>
                                            </div>
                                            <div class="col-xl-8 col-md-12">
                                                <div class="d-flex align-items-center justify-content-xl-end flex-wrap">
                                                    <div class="mr-3">
                                                        <small class="text-muted">Tanggal Transaksi:</small>
                                                        <span>{{ date('d M Y H:i:s', strtotime ($sales->created_at)) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- logo and title -->
                                        <div class="row mt-5">
                                            <div class="col-6">
                                                <h1><b>INVOICE</b></h1>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <img src="/assets/assets/img/newlogo.png" alt="logo" height="80">
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- invoice address and contact -->
                                        <div class="row invoice-info">
                                            <div class="col-6 mt-1">
                                                <h6 class="invoice-from font-weight-bold">Tagihan Dari</h6>
                                                <div class="mb-1">
                                                    <span class="font-weight-bold">PT. Dobha Putra Salim</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>Jl. Pulo Empang No.12, Bogor Selatan, Kota Bogor</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>marketing@dobha.com</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>0857 2075 1309</span>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <h6 class="invoice-to font-weight-bold">Kepada Yth,</h6>
                                                <div class="mb-1">
                                                    <span>CD-{{ $sales->kode_customer }} | <b>{{ $nama }}</b></span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>{{ $sales->alamat }}</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>{{ $sales->telepon }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- product details table-->
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                                <tr class="border-0">
                                                    <th>ITEM</th>
                                                    <th>SATUAN</th>
                                                    <th class="text-center">HARGA</th>
                                                    <th class="text-center">QTY</th>
                                                    <th  class="text-center">JUMLAH</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sales->lines as $sl)
                                                <tr>
                                                    <td style="padding:0px;">{{ $sl->namas->nama }}</td>
                                                    <td style="padding:0px;">{{ $sl->satuan_id }}</td>
                                                    <td class="text-right" style="padding:0px;">Rp. {{ number_format ($sl->harga,0) }}</td>
                                                    <td class="text-center" style="padding:0px;">{{ $sl->qty }}</td>
                                                    <td class="text-right font-weight-bold" style="padding:0px;">Rp. {{ number_format ($sl->grand_total,0) }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <hr/>
                                            <tfoot style="padding:30px;">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-center">
                                                        <b>Total</b>
                                                    </th>
                                                    <th class="text-right">
                                                        <b>Rp. {{ number_format ($sales->grand_total,0) }}</b>
                                                    </th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="invoice-view-wrapper mt-4">
                    <div class="row">
                        <!-- invoice action -->
                        <div class="col-12">
                            <div class="card invoice-action-wrapper shadow-none border">
                                <div class="card-body btn-group justify-content-center">
                                    <div class="invoice-action-btn mr-3">
                                        <a href="{{ route('transaksi-penjualan-tunai') }}" class="btn btn-dark btn-sm btn-shadow">
                                            <i class='bx bx-home bx-fw mr-2'></i>Kembali
                                        </a>
                                    </div>
                                    <div class="invoice-action-btn mr-3">
                                        <button class="btn btn-warning btn-sm btn-shadow invoice-print" onclick="printContent('p1')">
                                            <i class="bx bx-printer"></i>Print
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
        </div>

        

@endsection

@push('script')
<script src="{{ url('assets/assets/js/dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

@endpush

