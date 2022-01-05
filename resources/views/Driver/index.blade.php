<!DOCTYPE html>
<html>
<head>
    <title>Halaman Driver</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Data Driver</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('driver/create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-dark">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>No KTP</th>
                            <th>Foto KTP</th>
                            <th>Data Driver</th>
                            <th>Kendaraan</th>
                            <th>Nomor Kendaraan</th>
                            <th>Foto STNK</th>
                            <th>Nomor Rekening</th>
                            <th>Foto Rekening</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($driver as $Driver)
                        <tr>
                            <td>{{ $Driver->nama }}</td>
                            <td>{{ $Driver->nomor_telepon }}</td>
                            <td>{{ $Driver->alamat }}</td>
                            <td>{{ $Driver->tanggal_lahir }}</td>
                            <td>{{ $Driver->no_ktp }}</td>
                            <td>{{ $Driver->foto_ktp }}</td>
                            <td>{{ $Driver->data_driver }}</td>
                            <td>{{ $Driver->kendaraan }}</td>
                            <td>{{ $Driver->nomor_kendaraan }}</td>
                            <td>{{ $Driver->foto_stnk }}</td>
                            <td>{{ $Driver->nomor_rekening }}</td>
                            <td>{{ $Driver->foto_rekening }}</td>
                            <td>
                                <a href="{{url('driver/delete',array($Driver->kode_driver))}}">Delete</a>
                                <a href="{{url('driver/edit',array($Driver->kode_driver))}}">Edit</a>
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