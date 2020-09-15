<input type="hidden" name="id" value="{{ $customer->id }}" id="id_data" />
<div class="row ">
    <div class="col-lg-12 col-md-12">
        <div class="form-group ">
            <label for="kode_customer" 
            @error('kode_customer') class="text-danger" 
            @enderror>Kode Customer 
            @error('kode_customer')
            | {{ $message }}
            @enderror</label>
              <input type="text" class="form-control" value="{{ $customer->kode_customer  }}" style="height: 28px" readonly name="kode_customer">
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
              <input type="text" class="form-control" placeholder="-" style="height: 28px" name="nama" value="{{ $customer->nama  }}">
          </div>
      </div>
  </div>
  <div class="row ">
      <div class="col-lg-12 col-md-12">
          <div class="form-group ">
              <label>Telepon</label>
              <input type="number" class="form-control" placeholder="-" style="height: 28px" name="telepon" value="{{ $customer->telepon  }}">
          </div>
      </div>
  </div>
  <div class="row ">
      <div class="col-lg-12 col-md-12">
          <div class="form-group ">
              <label>Alamat</label>
              <textarea type="text" class="form-control" placeholder="-" style="height: 90px" name="alamat">{{ $customer->alamat  }}</textarea>
          </div>
      </div>
  </div>
</div>