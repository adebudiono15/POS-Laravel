@extends('layouts.master')

@section('title', 'Master Satuan')

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
                        <th class="all"><b>NAMA SATUAN</b></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($satuan as $item)
                    <tr>
                        <td>{{ $item->nama_satuan }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                                    <a class="dropdown-item btn-edit" data-id="{{ $item->id }}" href="#">Edit</a>

                                    
                                    <form action="{{ route('delete-satuan', $item->id) }}"
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
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius: 10px !important">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mt-3 mb-1 text-white"><b>TAMBAH DATA SATUAN</b></p>
                        <img src="{{ url('assets/img/logo-putih.png') }}" alt="" class="mt-4" width="100">
                    </div>
                </div>
                <br>
                <form action="{{ route('save-satuan') }}" method="post">
                @csrf

                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group ">
                            <label for="kategori" 
                            @error('nama_satuan') class="text-danger" 
                            @enderror>Nama Satuan
                            @error('nama_satuan')
                            | {{ $message }}
                            @enderror</label>
                            <input type="text" class="form-control" placeholder="-" style="height: 28px" name="nama_satuan" value="{{ old('nama_satuan') }}">
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
                          <p class="mt-3 mb-1 text-white"><b>UPDATE DATA SATUAN</b></p>
                          <img src="{{ url('assets/img/logo-putih.png') }}" alt="" class="mt-4" width="100">
                      </div>
                  </div>
                  <br>
                  <form class="form form-vertical" method="post" id="form-edit" enctype="multipart/form-data" action="{{ route('save-satuan') }}">
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
            "order": [[ 0, "asc" ]],
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

        $('.btn-edit').on('click', function() {
            // console.log($(this).data('id'))
            let id = $(this).data('id')
            $.ajax({
                url: `/${id}/edit-satuan`,
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
                url: `/satuan/update/${id}`,
                method: "PATCH",
                data:formData,

                success: function(data) {
                    // console.log(data)
                    $('#editModals').modal('hide')
                    window.location.assign('/master-satuan')
                },
                 error: function(err) {
                    console.log(err.responseJSON)
                    let err_log = err.responseJSON.errors;
                    if (err.status == 422){
                        if (typeof(err_log.kode_customer) !== 'undefined'){
                            $('#editModals').find('[name="nama_satuan"]').prev().html('<span style="color:red">Kode Barang | '+err_log.nama_satuan[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="nama_satuan"]').prev().html('<span>nama_satuan</span>')
                        }

                    }
                }
            })
        })
</script>

@endpush