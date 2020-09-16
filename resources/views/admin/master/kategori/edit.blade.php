<input type="hidden" name="id" value="{{ $kategori->id }}" id="id_data" />
  <div class="row ">
      <div class="col-lg-12 col-md-12">
          <div class="form-group ">
            <label for="kategori" 
            @error('kategori') class="text-danger" 
            @enderror>Nama Kategori 
            @error('kategori')
            | {{ $message }}
            @enderror</label>
              <input type="text" class="form-control" placeholder="-" style="height: 28px" name="kategori" value="{{ $kategori->kategori  }}">
          </div>
      </div>
  </div>