@extends('layouts.master')

@section('title', 'Pembelian Barang')

@section('content')
<input type="hidden" name="grand_total" value="0">
<form action="{{ route('save-pembelian') }}" method="post">
@csrf
<div class="container main-container" id="main-container">
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header border-0 bg-none">
            <div class="row">
                <div class="col-12 col-md">
                    <p class="fs15">@yield('title')</p>
                </div>
            </div>
        </div>
        <div class="card-body ">
            
            <div class="row">
                <div class="col-lg-6">
                    @if (isset($kode_Supplier))
                    <div class="form-group">
                        <label for="nama_supplier" @error('nama_supplier') class="text-danger" @enderror>Supplier @error('nama_supplier')
                            | {{ $message }}
                            @enderror</label>
                       <select id="supplier" class="select2 form-control" name="nama_supplier" style="width: 100%">
                        <option value=""></option>
                       @foreach ($supplier as $item)
                           <option value="{{ $item->id }}" {{ ($kode_Supplier == $item->id) ? 'selected' : '' }}>{{ $item->nama_supplier }}</option>
                       @endforeach
                        </select>
                    </div>
                    @else
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nama_supplier" @error('nama_supplier') class="text-danger" @enderror>Supplier @error('nama_supplier')
                                | {{ $message }}
                                @enderror</label>
                           <select id="supplier" class="select2 form-control" name="nama_supplier" style="width: 100%">
                            <option value=""></option>
                           @foreach ($supplier as $item)
                               <option value="{{ $item->id }}">{{ $item->nama_supplier }}</option>
                           @endforeach
                            </select>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="no_struk" 
                        @error('no_struk') class="text-danger" 
                        @enderror>ID Pembelian
                        @error('no_struk')
                        | {{ $message }}
                        @enderror</label>
                        <input type="text" class="form-control" placeholder="-" style="height: 28px;background-color: grey;color:white;" name="no_struk" value="{{ $kode }}" readonly>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<div class="container main-container" id="main-container">
    @if (isset($barang))
   
        <table class="table datatable display responsive w-100">
                <thead>
                    <tr>
                        <th hidden><b>ID</b></th>
                        <th><b>#</b></th>
                        <th><b>NAMA</b></th>
                        <th><b>SATUAN</b></th>
                        <th><b>HARGA BELI</b></th>
                        <th hidden><b>STOCK</b></th>
                        <th><b>QTY</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $e => $item)
                    <tr>
                        <td hidden>{{ $item->id }}</td>
                        <td>{{ $e+1 }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->satuan }}</td>
                        <td>{{ $item->harga_beli }}</tdm->
                        <td hidden>{{ $item->stock }}</td>
                        <td>
                            <input type="hidden" class="form-control" name="barang[]" value="{{ $item->id }}">    
                            <input type="number" class="form-control" style="height: 28px" name="qty[]" value="0">    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-sm btn-outline-template">
                <i class="material-icons">note_add</i> Tambah Data
            </button>
            @endif
    </div>
</form>
@endsection

@push('js-second')
<script>
    $('#supplier').on('select2:select', function (e) { 
        console.log('select event');

        var kode_Supplier = $(this).val();
        var url = "{{ url('master-pembelian-barang/') }}"+'/'+kode_Supplier;

        window.location.href = url;

    });

    $('body').on('click', '.hapus', function(e){
        e.preventDefault();
        $(this).closest('tr').remove();
    })

     $("button[type='submit']").click(function(e){
       
        var grand_total = parseInt($("input[name='grand_total']").val());

    })

    $('#supplier').on('select2:select', function (e) { 
      console.log('select event');

              var kode_supplier = $(this).val();
              var url = "{{ url('supplier/ajax') }}"+'/'+kode_supplier;
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

    $("#supplier").select2({
        placeholder: "Cari Supplier",
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
            "order": [[ 4, "asc" ]],
        });
    });

</script>
@endpush