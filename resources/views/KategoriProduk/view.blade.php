<div class="form-group">
    <label for="kategori">Kategori Produk</label>
    <select class="form-control" id="kategori" name="id_kategori">
       @foreach ($kategori as $kategori)
          <option value="{{ $kategori->id_kategori }}">{{ $kategori->kategori }}</option>
       @endforeach
    </select>
 </div>