<input type="hidden" name="id" value="{{ $supplier->id }}" id="id_data" />
<div class="row ">
    <div class="col-lg-12 col-md-12">
        <div class="form-group ">
            <label for="kode_supplier" 
            @error('kode_supplier') class="text-danger" 
            @enderror>Kode Supplier 
            @error('kode_supplier')
            | {{ $message }}
            @enderror</label>
              <input type="text" class="form-control" value="{{ $supplier->kode_supplier  }}" style="height: 28px" readonly name="kode_supplier">
          </div>
      </div>
  </div>
  <div class="row ">
      <div class="col-lg-12 col-md-12">
          <div class="form-group ">
            <label for="nama_supplier" 
            @error('nama_supplier') class="text-danger" 
            @enderror>Nama Supplier 
            @error('nama_supplier')
            | {{ $message }}
            @enderror</label>
              <input type="text" class="form-control" placeholder="-" style="height: 28px" name="nama_supplier" value="{{ $supplier->nama_supplier  }}">
          </div>
      </div>
  </div>
  <div class="row ">
      <div class="col-lg-12 col-md-12">
          <div class="form-group ">
              <label>Telepon</label>
              <input type="number" class="form-control" placeholder="-" style="height: 28px" name="telepon" value="{{ $supplier->telepon  }}">
          </div>
      </div>
  </div>
  <div class="row ">
      <div class="col-lg-12 col-md-12">
          <div class="form-group ">
              <label>Alamat</label>
              <textarea type="text" class="form-control" placeholder="-" style="height: 90px" name="alamat">{{ $supplier->alamat  }}</textarea>
          </div>
      </div>
  </div>
</div>