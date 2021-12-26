<!DOCTYPE html>
<html>
<head>
    <title>Data Customer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Tambah Data Customer</h4>
            </div>
            <div class="panel-body">
               <form action="{{url('customer/create')}}" method="get"> 
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Tambah Data" class="btn btn-danger">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Alamat</th>

                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($customer as $Customer)
                        <tr>
                            <td>{{ $Customer->nama }}</td>
                            <td>{{ $Customer->nomor_telepon }}</td>
                            <td>{{ $Customer->email }}</td>
                            <td>{{ $Customer->alamat }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>