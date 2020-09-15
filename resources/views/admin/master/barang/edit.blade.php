<input type="hidden" name="id" value="{{ $barang->id }}" id="id_data" />
<div class="row ">
    <div class="col-lg-12 col-md-12">
        <div class="form-group ">
            <label for="kode_barang" 
            @error('kode_barang') class="text-danger" 
            @enderror>Kode Barang 
            @error('kode_barang')
            | {{ $message }}
            @enderror</label>
              <input type="text" class="form-control" value="{{ $barang->kode_barang  }}" style="height: 28px" readonly name="kode_barang">
          </div>
      </div>
  </div>
  <div class="row ">
      <div class="col-lg-12 col-md-12">
          <div class="form-group ">
            <label for="nama_barang" 
            @error('nama_barang') class="text-danger" 
            @enderror>Nama Barang 
            @error('nama_barang')
            | {{ $message }}
            @enderror</label>
              <input type="text" class="form-control" placeholder="-" style="height: 28px" name="nama_barang" value="{{ $barang->nama_barang  }}">
          </div>
      </div>
  </div>
  <div class="row ">
    <div class="col-lg-12 col-md-12">
        <div class="form-group ">
          <label for="satuan" 
          @error('satuan') class="text-danger" 
          @enderror>Satuan 
          @error('satuan')
          | {{ $message }}
          @enderror</label>
            <input type="text" class="form-control" placeholder="-" style="height: 28px" name="satuan" value="{{ $barang->satuan  }}" readonly>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-lg-12 col-md-12">
        <div class="form-group ">
          <label for="harga" 
          @error('harga') class="text-danger" 
          @enderror>Harga 
          @error('harga')
          | {{ $message }}
          @enderror</label>
            <input type="number" class="form-control" placeholder="-" style="height: 28px" name="harga" value="{{ $barang->harga  }}">
        </div>
    </div>
</div>
  
</div>