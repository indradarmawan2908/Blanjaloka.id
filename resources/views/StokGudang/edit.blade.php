<!DOCTYPE html>
<html>
<head>
    <title>Halaman Mengedit Stok Gudang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Kelola Stok Gudang</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('stokgudang/update', $stokgudang->id_stok_gudang)}}" method="post">
                   
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" value="{{$stokgudang->nama_produk}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <input type="text" name="satuan" id="satuan" value="{{$stokgudang->satuan}}" class="form-control">
                    </div>           
                    <div class="form-group">
                        <label for="stok_saat_ini">Stok Saat ini</label>
                        <input type="text" name="stok_saat_ini" id="stok_saat_ini" value="{{$stokgudang->stok_saat_ini}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="stok_minimal">Stok Minimal</label>
                        <input type="text" name="stok_minimal" id="stok_minimal" value="{{$stokgudang->stok_minimal}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto_produk">Nama Toko</label>
                        <input type="text" name="nama_toko" id="nama_toko" value="{{$stokgudang->nama_toko}}" class="form-control">
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