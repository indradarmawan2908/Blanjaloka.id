<!DOCTYPE html>
<html>
<head>
    <title>Hide Produk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Hide Produk</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('update', $data->id_produk)}}" method="post">
                    <!-- <input type="hidden" name="id" id="id_produk" value="{{$data->id_produk}}"> -->
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <input type="text" name="satuan" id="satuan" value="{{$data->satuan}}" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="text" name="harga" id="harga_jual" value="{{$data->harga_jual}}" class="form-control">
                    </div>          
                    <div class="form-group">
                        <label for="stok-saat_ini">Stok Saat ini</label>
                        <input type="text" name="stok" id="stok_saat_ini" value="{{$data->stok_saat_ini}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="stok_minimal">Stok_minimal</label>
                        <input type="text" name="stok_minimal" id="stok_minimal" value="{{$data->stok_minimal}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto_produk">Foto Produk</label>
                        <input type="file" name="foto" id="foto_produk" value="{{$data->foto_produk}}" class="form-control">
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