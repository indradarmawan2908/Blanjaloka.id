<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pengelola Pasar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Tambah Data Pengelola Pasar</h4>
            </div>
            <div class="panel-body">
            <form action="{{url('pengelolapasar')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required="require">
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control">
                    </div>     
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_ktp">Nomor KTP</label>
                        <input type="text" name="no_ktp" id="no_ktp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto_ktp">Foto KTP</label>
                        <input type="file" name="foto_ktp" id="foto_ktp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>                                   
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="Simpan" class="btn btn-primary">{{ csrf_field() }}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>