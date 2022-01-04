<!DOCTYPE html>
<html>
<head>
    <title>Kelola Rekomendasi Bahan Masakan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Bahan Masakan</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('bahanmasakan/create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-info">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Resep Masakan</th>
                            <th>Nama Produk</th>
                            <th>Satuan</th>
                            <th>Harga Jual</th>
                            <th>Stok Saat Ini</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($bahanmasakan as $BahanMasakan)
                        <tr>
                            <td>{{ $BahanMasakan->resep_masakan }}</td>
                            <td>{{ $BahanMasakan->nama_produk }}</td>
                            <td>{{ $BahanMasakan->satuan }}</td>
                            <td>{{ $BahanMasakan->harga_jual }}</td>
                            <td>{{ $BahanMasakan->stok_saat_ini }}</td>      
                            <td>
                                <a href="{{url('bahanmasakan/delete',array($BahanMasakan->id_masakan))}}">Hapus</a>
                                <a href="{{url('bahanmasakan/edit',array($BahanMasakan->id_masakan))}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>