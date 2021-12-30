<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Edit Produk</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('editproduk')}}" method="post">
                    <div class="form-group">
                        <label for="nama_produk">Nama_produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" required="require">
                    </div>
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <input type="text" name="satuan" id="satuan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="text" name="harga_jual" id="harga_jual" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="stok_saat_ini">Stok Saat Ini</label>
                        <input type="text" name="stok_saat_ini" id="stok_saat_ini" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="stok_minimal">Stok Minimal</label>
                        <input type="text" name="stok_minimal" id="stok_minimal" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="foto_produk">Foto_produk</label>
                        <input type="file" name="foto_produk" id="foto_produk" class="form-control">
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