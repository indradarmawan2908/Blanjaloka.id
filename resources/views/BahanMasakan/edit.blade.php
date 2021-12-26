<!DOCTYPE html>
<html>
<head>
    <title>Halaman Update Bahan Masakan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Rekomendasi Bahan Masakan</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('update', $data->id_masakan)}}" method="post">
                    <!-- <input type="hidden" name="id" id="id_masakan" value="{{$data->id_masakan}}"> -->
                    <div class="form-group">
                        <label for="resep_masakan">Resep Makanan</label>
                        <input type="text" name="resep" id="resep_masakan" value="{{$data->resep_masakan}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <input type="text" name="satuan" id="satuan" value="{{$data->satuan}}" class="form-control">
                    </div>      
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="text" name="harga_jual" id="harga_jual" value="{{$data->harga_jual}}" class="form-control">
                    </div>     
                    <div class="form-group">
                        <label for="stok-saat_ini">Stok Saat ini</label>
                        <input type="text" name="stok" id="stok_saat_ini" value="{{$data->stok_saat_ini}}" class="form-control">
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