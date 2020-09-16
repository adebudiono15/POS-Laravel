<input type="hidden" name="id" value="{{ $barang->id }}" id="id_data" />
<div class="row ">
    <div class="col-lg-6 col-md-6">
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
    <div class="col-lg-6 col-md-6">
        <div class="form-group ">
            <label for="stock" 
            @error('stock') class="text-danger" 
            @enderror>Stock 
            @error('stock')
            | {{ $message }}
            @enderror</label>
              <input type="text" class="form-control" value="{{ $barang->stock  }}" style="height: 28px" name="stock">
          </div>
      </div>
  </div>
  <div class="row ">
    <div class="col-lg-6 col-md-6">
        <div class="form-group ">
          <label for="satuan" 
          @error('satuan') class="text-danger" 
          @enderror>Satuan 
          @error('satuan')
          | {{ $message }}
          @enderror</label>
            <input type="text" class="form-control" placeholder="-" style="height: 28px;background-color:grey;color:#fff;" name="satuan" value="{{ $barang->satuan  }}" readonly>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="form-group ">
          <label for="kategori" 
          @error('kategori') class="text-danger" 
          @enderror>Kategori 
          @error('kategori')
          | {{ $message }}
          @enderror</label>
            <input type="text" class="form-control" placeholder="-" style="height: 28px;background-color:grey;color:#fff;" name="kategori" value="{{ $barang->kategori  }}" readonly>
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
            <input type="number" class="form-control" placeholder="-" style="height: 28px" name="harga_beli" value="{{ $barang->harga_beli  }}">
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
            <input type="number" class="form-control" placeholder="-" style="height: 28px" name="harga" value="{{ $barang->harga  }}">
        </div>
    </div>
</div>
  
</div>