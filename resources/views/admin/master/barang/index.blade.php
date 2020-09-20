@extends('layouts.master')

@section('title', 'Master Barang')

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
                        <th class="all"><b>KODE BARANG</b></th>
                        <th class="min-tablet"><b>SUPPLIER</b></th>
                        <th class="min-tablet"><b>NAMA</b></th>
                        <th class="min-desktop"><b>SATUAN</b></th>
                        <th class="min-desktop"><b>KATEGORI</b></th>
                        <th class="min-desktop"><b>STOCK</b></th>
                        <th class="min-desktop"><b>BELI</b></th>
                        <th class="min-desktop"><b>JUAL</b></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $item)
                    <tr>
                        <td hidden>{{ $item->id }}</td>
                        <td>DB{{ $item->kode_barang }}</td>
                        <td>{{ $item->nama_supplier->nama_supplier }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->satuan }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->stock }}</td>
                        <td class="text-right">{{ number_format($item->harga_beli,0) }}</td>
                        <td class="text-right">{{ number_format($item->harga,0) }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                                    <a class="dropdown-item btn-edit" data-id="{{ $item->id }}" href="#">Edit</a>

                                    
                                    <form action="{{ route('delete-barang', $item->id) }}"
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
                        <p class="mt-3 mb-1 text-white"><b>TAMBAH DATA BARANG</b></p>
                    </div>
                </div>
                <br>
                <form action="{{ route('save-barang') }}" method="post">
                @csrf
                <div class="row ">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="nama_supplier_id" @error('nama_supplier_id') class="text-danger" @enderror>Nama Supplier @error('nama_supplier_id')
                                | {{ $message }}
                                @enderror</label>
                           <select id="supplier" class="js-states form-control" style="width: 100%" name="nama_supplier_id">
                            <option value=""></option>
                           @foreach ($supplier as $item)
                               <option value="{{ $item->id }}">{{ $item->nama_supplier }}</option>
                           @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group ">
                            <label for="stock" 
                            @error('stock') class="text-danger" 
                            @enderror>Stok
                            @error('stock')
                            | {{ $message }}
                            @enderror</label>
                            <input type="number" class="form-control" placeholder="-" style="height: 28px" name="stock" value="{{ old('stock') }}">
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group ">
                            <label for="kode_barang" 
                            @error('kode_barang') class="text-danger" 
                            @enderror>Kode Barang
                            @error('kode_barang')
                            | {{ $message }}
                            @enderror</label>
                            <input type="text" class="form-control" value="{{ $kode }}" style="height: 28px; background-color:grey;color:#fff;" readonly name="kode_barang" value="{{ old('kode_customer') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group ">
                            <label for="nama_barang" 
                            @error('nama_barang') class="text-danger" 
                            @enderror>Nama Barang
                            @error('nama_barang')
                            | {{ $message }}
                            @enderror</label>
                            <input type="text" class="form-control" placeholder="-" style="height: 28px" name="nama_barang" value="{{ old('nama_barang') }}">
                        </div>
                    </div>
                </div>
               
                <div class="row ">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="kategori" @error('kategori') class="text-danger" @enderror>Kategori @error('kategori')
                                | {{ $message }}
                                @enderror</label>
                           <select id="kategori" class="js-states form-control" style="width: 100%" name="kategori">
                            <option value=""></option>
                           @foreach ($kategori as $item)
                               <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                           @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="satuan" @error('satuan') class="text-danger" @enderror>Satuan @error('satuan')
                                | {{ $message }}
                                @enderror</label>
                           <select id="single" class="js-states form-control" style="width: 100%" name="satuan">
                            <option value=""></option>
                           @foreach ($satuan as $item)
                               <option value="{{ $item->nama_satuan }}">{{ $item->nama_satuan }}</option>
                           @endforeach
                            </select>
                        </div>
                    </div>
                </div>
               
                <div class="row ">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group ">
                            <label for="harga_beli" 
                            @error('harga_beli') class="text-danger" 
                            @enderror>Harga Beli
                            @error('harga_beli')
                            | {{ $message }}
                            @enderror</label>
                            <input type="number" class="form-control" placeholder="-" style="height: 28px" name="harga_beli" value="{{ old('harga_beli') }}">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group ">
                            <label for="harga" 
                            @error('harga') class="text-danger" 
                            @enderror>Harga Jual
                            @error('harga')
                            | {{ $message }}
                            @enderror</label>
                            <input type="number" class="form-control" placeholder="-" style="height: 28px" name="harga" value="{{ old('harga') }}">
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

{{-- modal edit --}}
<div id="editModals" class="modal fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 10px !important">
          <div class="card border-0 shadow-sm">
              <div class="card-body">
                  <div class="row ">
                      <div class="col-lg-12 col-md-12 text-center">
                          <p class="mt-3 mb-1 text-white"><b>UPDATE DATA BARANG</b></p>
                      </div>
                  </div>
                  <br>
                  <form class="form form-vertical" method="post" id="form-edit" enctype="multipart/form-data" action="{{ route('save-barang') }}">
                    @csrf
                  <div class="modal-body">

                  </div>
              <div class="card-footer">
                  <button type="button" class="btn btn-sm btn-outline-template btn-update">
                      <i class="material-icons">note_add</i> Update Data
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
{{-- last modal edit --}}
@endsection

@push('js-second')
<script>
    $("#single").select2({
        placeholder: "Pilih Satuan Barang",
        allowClear: true
    });
    $("#kategori").select2({
        placeholder: "Pilih Kategori Barang",
        allowClear: true
    });
    $("#supplier").select2({
        placeholder: "Pilih Supplier",
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

        $('.btn-edit').on('click', function() {
            // console.log($(this).data('id'))
            let id = $(this).data('id')
            $.ajax({
                url: `/${id}/edit-barang`,
                method: "GET",
                success: function(data) {
                    // console.log(data)
                    $('#editModals').find('.modal-body').html(data)
                    $('#editModals').modal('show')
                },
                error: function(error) {
                    console.log(error)
                }
            })
        })

        $('.btn-update').on('click', function() {
            // console.log($(this).data('id'))
            let id = $('#form-edit').find('#id_data').val()
            let formData = $('#form-edit').serialize()
            console.log(formData)
            $.ajax({
                url: `/barang/update/${id}`,
                method: "PATCH",
                data:formData,

                success: function(data) {
                    // console.log(data)
                    $('#editModals').modal('hide')
                    window.location.assign('/master-barang')
                },
                 error: function(err) {
                    console.log(err.responseJSON)
                    let err_log = err.responseJSON.errors;
                    if (err.status == 422){
                        if (typeof(err_log.kode_customer) !== 'undefined'){
                            $('#editModals').find('[name="kode_barang"]').prev().html('<span style="color:red">Kode Barang | '+err_log.kode_barang[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="kode_barang"]').prev().html('<span>Kode Customer</span>')
                        }

                    }
                }
            })
        })
</script>

@endpush