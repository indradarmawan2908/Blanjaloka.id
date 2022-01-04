<!DOCTYPE html>
<html>
<head>
    <title>Kelola Daftar Belanja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Daftar Belanja Harian </h4>
            </div>
            <div class="panel-body">
                <form action="{{url('belanjaharian/create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-primary">
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
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($belanjaharian as $BelanjaHarian)
                        <tr>
                            <td>{{ $BelanjaHarian->nama_produk }}</td>
                            <td>{{ $BelanjaHarian->satuan }}</td>
                            <td>{{ $BelanjaHarian->harga_jual}}</td>
                            <td>{{ $BelanjaHarian->stok_saat_ini }}</td>
                            <td>{{ $BelanjaHarian->stok_minimal }}</td>
                            <td>
                                <a href="{{url('belanjaharian/delete',array($BelanjaHarian->kode_produk))}}">Hapus</a>
                                <a href="{{url('belanjaharian/edit',array($BelanjaHarian->kode_produk))}}">Edit</a>
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