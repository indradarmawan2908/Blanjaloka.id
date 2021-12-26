<html lang="en">
  <head>
  </head>

  <body>
    <h1><center> Input Data Toko </center></h1>
    <form action="{{url('toko')}}" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="Nama" class="form-label"> Nama </label>
        <input type="text" name="nama" class="form-control">
        </div>
        &nbsp;
        <div class="mb-3">
        <label for="Alamat" class="form-label"> Alamat </label>
        <input type="text" name="alamat" class="form-control">
        </div>
        &nbsp;
        <div class="mb-3">
        <label for="titik kordinat" class="form-label"> Titik Kordinat </label>
        <input type="text" name="titik_kordinat" class="form-control">
        </div>
        &nbsp;
        <div class="mb-3">
        <label for="Foto" class="form-label">Foto Profil Toko</label>
        <input type="file" name="foto_profiltoko" class="form-control">
        </div>
        &nbsp;
        <div class="mb-3">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary"> Sumbit </button>
    </form>
  </body>
</html>