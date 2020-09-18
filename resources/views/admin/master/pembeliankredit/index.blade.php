@extends('layouts.master')

@section('title', 'Pembelian Kredit Barang')

@section('content')
<div class="container main-container" id="main-container">
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header border-0 bg-none">
            <div class="row">
                <div class="col-12 col-md">
                    <p class="fs15">@yield('title')</p>
                </div>
                <div class="col-auto align-self-center">
                   <a href="{{ route('pembelian-barang-kredit') }}"> 
                    <button class="btn btn-sm btn-outline-template ml-2">
                        <i class="material-icons md-18">note_add</i> Tambah Data
                    </button>
                </a>
                </div>
                <div class="col-auto align-self-center">
                    <button class="btn btn-sm btn-outline-template ml-2">
                        <i class="material-icons md-18">cloud_download</i> Export
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body ">
            <table class="table datatable display responsive w-100">
                <thead>
                    <tr>
                        <th hidden><b>ID</b></th>
                        <th class="min-desktop text-center"><b>TANGGAL</b></th>
                        <th class="all"><b>FAKTUR</b></th>
                        <th class="min-tablet"><b>SUPPLIER</b></th>
                        <th class="min-tablet"><b>GRAND TOTAL</b></th>
                        <th class="min-tablet"><b>STATUS</b></th>
                        <th class="min-tablet"><b>SISA</b></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembelian_kredit as $item)
                    <tr>
                        <td hidden>{{ $item->id }}</td>
                        <td class="text-center">{{ date('d M Y', strtotime ($item->created_at)) }}</td>
                        <td>DP{{ date('dmYHis', strtotime ($item->created_at)) }}</td>
                        <td>{{ $item->nama_supplier->nama_supplier }}</td>
                        <td class="text-right">Rp. {{  number_format($item->grand_total,0) }}</td>
                        @if ($item->sisa > 1)
                        <td class="text-center">BELUM LUNAS</td>
                        @endif
                        @if ($item->sisa == 0)
                        <td class="text-center">LUNAS</td>
                        @endif
                        @if ($item->sisa > 1)
                        <td class="text-right">Rp. {{  number_format($item->sisa,0) }}</td>
                        @endif
                        @if ($item->sisa == 0)
                        <td class="text-center">LUNAS</td>
                        @endif
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                                    <a class="dropdown-item btn-edit" data-id="{{ $item->id }}" href="{{ url('transaksi-pembelian-kredit/'.$item->id) }}">Detail</a>

                                    
                                    <form action="{{ route('delete-pembelian-kredit', $item->id) }}"
                                        id="delete{{ $item->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a class="dropdown-item swal-confirm" data-id="{{ $item->id }}" href="#">Delete</a>
                                </form>

                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('js-second')
<script>
    'use strict'
    $(document).ready(function() {
        /* data Table */
        $('.datatable').DataTable({
            'responsive': true,
            'searching': true,
            "bLengthChange": true,
            "pageLength": 10,
            "order": [[ 0, "desc" ]],
        });
    });

</script>
<script>
     $(".swal-confirm").click(function(e) {
            id = e.target.dataset.id;
            Swal.fire({
                    title: 'YAKIN MAU HAPUS DATA?',
                    text: "Data Akan Dihapus Permanen",
                    icon: 'warning',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'YA, HAPUS!'
                    })
                .then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data Berhasil Dihapus',
                        showConfirmButton: false,
                        timer: 1800
                        })
                        $(`#delete${id}`).submit();
                    } else {
                        // swal("Data ini batal dihapus!");
                    }
                });
        });

        @if ($errors->any()) {
            Swal.fire({
            position: 'center',
            icon: 'info',
            title: 'ADA YANG GA BERES NIH',
            showConfirmButton: false,
            timer: 3000
            })
            $('#tambahData').modal('show')
        }
        @endif

</script>

@endpush