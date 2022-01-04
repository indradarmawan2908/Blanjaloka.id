<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Data Produk </h4>
            </div>
            <div class="panel-body">
                <form action="{{url('editproduk/create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-warning">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Satuan</th>
                            <th>Harga Jual</th>
                            <th>Stok Saat Ini</th>
                            <th>Stok_minimal</th>
                            <th>Foto Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($editproduk as $EditProduk)
                        <tr>
                            <td>{{ $EditProduk->nama_produk }}</td>
                            <td>{{ $EditProduk->satuan }}</td>
                            <td>{{ $EditProduk->harga_jual }}</td>
                            <td>{{ $EditProduk->stok_saat_ini }}</td>
                            <td>{{ $EditProduk->stok_minimal }}</td>
                            <td>{{ $EditProduk->stok_produk }}</td>
                            
                            
                            <td>
                                <a href="{{url('editproduk/delete',array($EditProduk->kode_produk))}}">Hapus</a>
                                <a href="{{url('editproduk/edit',array($EditProduk->kode_produk))}}">Edit</a>
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