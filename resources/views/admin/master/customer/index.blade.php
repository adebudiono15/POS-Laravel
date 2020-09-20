@extends('layouts.master')

@section('title', 'Master Customer')

@push('css-style')
@endpush

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
                        <th hidden><b>ID</b></B></th>
                        <th class="all"><b>KODE CUSTOMER</b></B></th>
                        <th class="min-tablet"><b>NAMA</b></th>
                        <th class="min-desktop"><b>TELEPON</b></th>
                        <th class="min-desktop"><b>ALAMAT</b></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $item)
                    <tr>
                        <td hidden>{{ $item->id }}</td>
                        <td>DC{{ $item->kode_customer }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->telepon }}</td>
                        <td>{{ substr($item->alamat, 0,  20) }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                                    <a class="dropdown-item btn-edit" data-id="{{ $item->id }}" href="#">Edit</a>

                                    
                                    <form action="{{ route('delete-customer', $item->id) }}"
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
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius: 10px !important">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mt-3 mb-1 text-white"><b>TAMBAH DATA CUSTOMER</b></p>
                    </div>
                </div>
                <br>
                <form action="{{ route('save-customer') }}" method="post">
                @csrf
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group ">
                            <label for="kode_customer" 
                            @error('kode_customer') class="text-danger" 
                            @enderror>Kode Customer
                            @error('kode_customer')
                            | {{ $message }}
                            @enderror</label>
                            <input type="text" class="form-control" value="{{ $kode }}" style="height: 28px;background-color:grey;color:#fff;" readonly name="kode_customer" value="{{ old('kode_customer') }}">
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group ">
                            <label for="nama" 
                            @error('nama') class="text-danger" 
                            @enderror>Nama
                            @error('nama')
                            | {{ $message }}
                            @enderror</label>
                            <input type="text" class="form-control" placeholder="-" style="height: 28px" name="nama" value="{{ old('nama') }}">
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group ">
                            <label>Telepon</label>
                            <input type="number" class="form-control" placeholder="-" style="height: 28px" name="telepon" value="{{ old('telepon') }}">
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group ">
                            <label for="alamat" 
                            @error('alamat') class="text-danger" 
                            @enderror>Alamat
                            @error('alamat')
                            | {{ $message }}
                            @enderror</label>
                            <textarea type="text" class="form-control" placeholder="-" style="height: 90px" name="alamat" >{{ old('alamat') }}</textarea>
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
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px !important">
          <div class="card border-0 shadow-sm">
              <div class="card-body">
                  <div class="row ">
                      <div class="col-lg-12 col-md-12 text-center">
                          <p class="mt-3 mb-1 text-white"><b>UPDATE DATA CUSTOMER</b></p>
                      </div>
                  </div>
                  <br>
                  <form class="form form-vertical" method="post" id="form-edit" enctype="multipart/form-data" action="{{ route('save-customer') }}">
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
                url: `/${id}/edit-customer`,
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
                url: `/customer/update/${id}`,
                method: "PATCH",
                data:formData,

                success: function(data) {
                    // console.log(data)
                    $('#editModals').modal('hide')
                    window.location.assign('/master-customer')
                },
                 error: function(err) {
                    console.log(err.responseJSON)
                    let err_log = err.responseJSON.errors;
                    if (err.status == 422){
                        if (typeof(err_log.kode_customer) !== 'undefined'){
                            $('#editModals').find('[name="kode_customer"]').prev().html('<span style="color:red">Kode Customer | '+err_log.kode_customer[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="kode_customer"]').prev().html('<span>Kode Customer</span>')
                        }

                        if (typeof(err_log.nama) !== 'undefined'){
                            $('#editModals').find('[name="nama"]').prev().html('<span style="color:red">Nama | '+err_log.nama[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="nama"]').prev().html('<span>Nama</span>')
                        }

                        if (typeof(err_log.alamat) !== 'undefined'){
                            $('#editModals').find('[name="alamat"]').prev().html('<span style="color:red">Alamat | '+err_log.alamat[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="alamat"]').prev().html('<span>Alamat</span>')
                        }

                        if (typeof(err_log.telepon) !== 'undefined'){
                            $('#editModals').find('[name="telepon"]').prev().html('<span style="color:red">Telepon | '+err_log.telepon[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="telepon"]').prev().html('<span>Telepon</span>')
                        }

                        if (typeof(err_log.kategori_id) !== 'undefined'){
                            $('#editModals').find('[name="kategori_id"]').prev().html('<span style="color:red">Kategori Customer | '+err_log.kategori_id[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="kategori_id"]').prev().html('<span>Kategori Customer</span>')
                        }

                    }
                }
            })
        })
</script>
@endpush