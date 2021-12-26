<!DOCTYPE html>
<html>
<head>
    <title>Kelola Data Pasar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Menambah Data Sewa Toko</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('sewatoko')}}" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required="require">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="titik_kordinat">Titik Kordinat</label>
                        <input type="text" name="titik_kordinat" id="titik_kordinat" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="sewa_toko">Sewa Toko</label>
                        <input type="text" name="sewa_toko" id="sewa_toko" class="form-control">
                    </div>
                        
                    
        
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>