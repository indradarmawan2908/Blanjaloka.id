<!DOCTYPE html>
<html>
<head>
    <title>Sewa Toko</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Sewa Toko </h4>
            </div>
            <div class="panel-body">
                <form action="{{url('sewatoko/create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-light">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Titik Kordinat</th>
                            <th>Sewa Toko</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($sewatoko as $Sewatoko)
                        <tr>
                            <td>{{ $Sewatoko->nama }}</td>
                            <td>{{ $Sewatoko->alamat }}</td>
                            <td>{{ $Sewatoko->titik_kordinat }}</td>
                            <td>{{ $Sewatoko->sewa_toko }}</td>
                            
                            
                            <td>
                                <a href="{{url('sewatoko/delete',array($Sewatoko->kode_toko))}}">Delete</a>
                                <a href="{{url('sewatoko/edit',array($Sewatoko->kode_toko))}}">Edit</a>
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