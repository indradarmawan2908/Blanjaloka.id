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
                <form action="{{url('create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Resep Masakan</th>
                            <th>Satuan</th>
                            <th>Harga Jual</th>
                            <th>Stok Saat Ini</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $key => $id_masakan)
                        <tr>
                            <td>{{ $d->resep_masakan }}</td>
                            <td>{{ $d->satuan }}</td>
                            <td>{{ $d->harga_jual }}</td>
                            <td>{{ $d->stok_saat_ini }}</td>      
                            <td>
                                <a href="{{url('read',array($d->id_masakan))}}">Read</a>
                                <a href="{{url('edit',array($d->id_masakan))}}">Edit</a>
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