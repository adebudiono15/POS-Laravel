@extends('layouts.master')

@section('title', 'Penjualan Barang')

@section('content')
<div class="container main-container" id="main-container">
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header border-0 bg-none">
            <div class="row">
                <div class="col-12 col-md">
                    <p class="fs15">@yield('title')</p>
                </div>
                <div class="col-auto align-self-center">
                    <button class="btn btn-sm btn-outline-template ml-2" data-toggle="modal" data-target="#tambahData">
                        <i class="material-icons md-18">note_add</i> Tambah Data
                    </button>
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
                        <th class="min-tablet"><b>CUSTOMER</b></th>
                        <th class="min-desktop"><b>GRAND TOTAL</b></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penjualan as $item)
                    <tr>
                        <td hidden>{{ $item->id }}</td>
                        <td class="text-center">{{ date('d M Y', strtotime ($item->created_at)) }}</td>
                        <td>DF{{ date('dmYHis', strtotime ($item->created_at)) }}</td>
                        <td>{{ $item->nama_customer }}</td>
                        <td class="text-right">Rp. {{ number_format($item->grand_total,0) }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                                    <a class="dropdown-item btn-edit" data-id="{{ $item->id }}" href="{{ url('transaksi-penjualan/'.$item->id) }}">Detail</a>

                                    
                                    <form action="{{ route('delete-penjualan', $item->id) }}"
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

{{-- modal insert --}}
<div id="tambahData" class="modal hide fade" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="border-radius: 10px !important">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mt-3 mb-1 text-white"><b>TAMBAH DATA PENJUALAN</b></p>
                    </div>
                </div>
                <br>
                <input type="hidden" name="grand_total" value="0">
                <form action="{{ route('save-penjualan') }}" method="post">
                @csrf
               
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama_customer" @error('nama_customer') class="text-danger" @enderror>Customer @error('nama_customer')
                                | {{ $message }}
                                @enderror</label>
                           <select id="customer" name="nama_customer" class="js-states form-control" style="width: 100%">
                            <option value=""></option>
                           @foreach ($customer as $item)
                               <option value="{{ $item->kode_customer }}">{{ $item->nama }}</option>
                           @endforeach
                            </select>
                            <tr>
                                <input type="text" name="nama_customer" id="txt_nama" hidden>
                                <input type="text" name="telepon" id="txt_telepon" hidden>
                                <input type="text" name="alamat" id="txt_alamat" hidden>
                                <input type="text" name="kode_customer" id="txt_kode" hidden>
                            </tr>
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="no_struk" 
                                @error('no_struk') class="text-danger" 
                                @enderror>ID FAKTUR
                                @error('no_struk')
                                | {{ $message }}
                                @enderror</label>
                                <input type="text" class="form-control" placeholder="-" style="height: 28px;background-color: grey;color:white;" name="no_struk" value="{{ $kode }}" readonly>
                            </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th><b>NAMA</b></th>
                                    <th><b>SATUAN</b></th>
                                    <th><b>HARGA</b></th>
                                    <th><b>QTY</b></th>
                                    <th><b>AKSI</b></th>
                                </tr>
                            </thead>
                            <tbody class="produk-ajax">

                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="kode_barang" @error('kode_barang') class="text-danger" @enderror>Tambah Barang @error('kode_barang')
                                        | {{ $message }}
                                        @enderror</label>
                                   <select id="barang" class="js-states form-control" style="width: 100%" name="kode_barang">
                                    <option value=""></option>
                                   @foreach ($barang as $item)
                                       <option value="{{ $item->kode_barang }}">{{ $item->nama_barang }}</option>
                                   @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-outline-template">
                    <i class="material-icons">note_add</i> Tambah Data
                </button>
                <button type="button" class="btn btn-sm btn-outline-template ml-3" data-dismiss="modal">
                    <i class="material-icons">not_interested</i> Batal
                </button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
{{-- last modal insert --}}

@endsection

@push('js-second')
<script>
     $('#barang').select2();
    $("input[name='grand_total']").val(0);
    $("input[name='nama_customer']").val('');
    $('#barang').on('select2:select', function (e) { 
        console.log('select event');

                var kode_barang = $(this).val();
                var nama_customer = $(this).val();
                var url = "{{ url('barang/ajax') }}"+'/'+kode_barang;
                var _this= $(this);

                $.ajax({
                    type:'get',
                    dataType: 'json',
                    url:url,
                    success : function(data){
                        console.log(data);
                        _this.val('');

                        var nilai = '';
                        nilai +='<tr>';
                            
                        nilai +='<td style="width:200px;">';
                        nilai +=data.data.nama_barang;
                        nilai +='<input type="hidden" class="form-control" name="nama[]" value="'+data.data.id+'" style="height:28px;"></input>';
                        nilai +='</td>';

                        nilai +='<td style="width:120px;">';
                        nilai +=data.data.satuan;
                        nilai +='<input type="hidden" class="form-control" name="satuan_id[]" value="'+data.data.satuan+'" style="height:28px;"></input>';
                        nilai +='</td>';


                        nilai +='<td class="harga" style="width:250px;">';
                        nilai +='<input type="number" class="form-control" name="harga[]" value="'+data.data.harga+'" style="height:28px"></input>';
                        nilai +='</td>';


                        nilai +='<td style="width:100px;">';
                        nilai +='<input type="number" class="form-control" name="qty[]" value="1" style="height:28px"></input>';
                        nilai +='</td>';


                        nilai +='<td>';
                        nilai +='<button class="btn btn-sm btn-danger hapus">Hapus</button>';
                        nilai +='</td>';

                        
                        nilai +='</tr>';

                        var total = parseInt($("input[name='grand_total']").val());
                        total += data.data.harga;
                        
                        $("input[name='grand_total']").val(total);

                        $('.produk-ajax').append(nilai);

                    }
                })      
       
    });

    $('body').on('click', '.hapus', function(e){
        e.preventDefault();
        $(this).closest('tr').remove();
    })

     $("button[type='submit']").click(function(e){
       
        var grand_total = parseInt($("input[name='grand_total']").val());

    })

    $("#barang").select2({
        placeholder: "Cari Barang",
        allowClear: true
    });
</script>
<script>
     $('#customer').on('select2:select', function (e) { 
      console.log('select event');

              var kode_customer = $(this).val();
              var url = "{{ url('customer/ajax') }}"+'/'+kode_customer;
              var _this= $(this);

              $.ajax({
                  type:'get',
                  dataType: 'json',
                  url:url,
                  success : function(data){
                      console.log(data);
                      _this.val('');


                     var nama = data.data.nama;
                      $('#txt_nama').val(nama);

                     var alamat = data.data.alamat;
                      $('#txt_alamat').val(alamat);
                    
                     var kode = data.data.kode_customer;
                      $('#txt_kode').val(kode);
                     
                     var telepon = data.data.telepon;
                      $('#txt_telepon').val(telepon);

                  }
              })      
     
     }); 
    $("#customer").select2({
        placeholder: "Cari Customer",
        allowClear: true
    });
</script>


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
                        // Swal.fire({
                        // position: 'center',
                        // icon: 'success',
                        // title: 'Data Berhasil Dihapus',
                        // showConfirmButton: false,
                        // timer: 1800
                        // })
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