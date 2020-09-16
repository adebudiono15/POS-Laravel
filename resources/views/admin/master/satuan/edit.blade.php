<input type="hidden" name="id" value="{{ $satuan->id }}" id="id_data" />
  <div class="row ">
      <div class="col-lg-12 col-md-12">
          <div class="form-group ">
            <label for="nama_satuan" 
            @error('nama_satuan') class="text-danger" 
            @enderror>Nama Satuan 
            @error('nama_satuan')
            | {{ $message }}
            @enderror</label>
              <input type="text" class="form-control" placeholder="-" style="height: 28px" name="nama_satuan" value="{{ $satuan->nama_satuan  }}">
          </div>
      </div>
  </div>