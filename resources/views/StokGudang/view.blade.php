<!DOCTYPE html>
<html>
<head>
    <title>Kelola Stok Gudang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Stok Gudang </h4>
            </div>
            <div class="panel-body">
                <form action="{{url('stokgudang/create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Satuan</th>
                            <th>Stok Saat Ini</th>
                            <th>Stok_minimal</th>
                            <th>Nama Toko</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($stokgudang as $Stokgudang)
                        <tr>
                            <td>{{ $Stokgudang->nama_produk }}</td>
                            <td>{{ $Stokgudang->satuan }}</td>
                            <td>{{ $Stokgudang->stok_saat_ini }}</td>
                            <td>{{ $Stokgudang->stok_minimal }}</td>
                            <td>{{ $Stokgudang->nama_toko}}</td>
                            
                            
                            <td>
                                <a href="{{url('stokgudang/delete',array($Stokgudang->id_stok_gudang))}}">Hapus</a>
                                <a href="{{url('stokgudang/edit',array($Stokgudang->id_stok_gudang))}}">Edit</a>
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