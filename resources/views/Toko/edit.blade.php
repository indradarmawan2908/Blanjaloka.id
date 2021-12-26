<html lang="en">
    <head>
    </head>

    <body>
     <h1><center> Edit Data Toko </center></h1>
      <form action="{{url('toko/update')}}/{{$toko->id_toko}}" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Nama " class="form-label"> Nama  </label>
            <input type="text" name="nama" value="{{$toko->nama}}" class="form-control">
        </div>
        &nbsp;
        <div class="mb-3">
            <label for="Alamat" class="form-label"> Alamat </label>
            <input type="text" name="alamat" value="{{$toko->alamat}}" class="form-control">
        </div>
        &nbsp;
        <div class="mb-3">
            <label for="Titik Kordinat" class="form-label"> Titik Kordinat </label>
            <input type="text" name="titik_kordinat" value="{{$toko->titik_kordinat}}" class="form-control">
        </div>
        &nbsp;
        <div class="mb-3">
            <label for="Foto" class="form-label"> Foto Profil Toko </label>
            <input type="file" name="foto_profiltoko" class="form-control">
        </div>
        &nbsp;
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
    </body>
</html>