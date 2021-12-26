<!DOCTYPE html>
<html>
<head>
    <title>Halaman Mengedit Data Sewa Toko</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Mengedit Data Sewa Toko</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('sewatoko/update', $sewatoko->kode_toko)}}" method="post">
                    
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$sewatoko->nama}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{$sewatoko->alamat}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="titik_kordinat">Titik Kordinat</label>
                        <input type="text" name="titik_kordinat" id="titik_kordinat" value="{{$sewatoko->titik_kordinat}}" class="form-control">
                    </div>
                                     
                    <div class="form-group">
                        <label for="sewa_toko">Sewa Toko</label>
                        <input type="text" name="sewa_toko" id="sewa_toko" value="{{$sewatoko->sewa_toko}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Update" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>