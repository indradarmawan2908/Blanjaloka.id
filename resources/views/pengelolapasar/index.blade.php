<!DOCTYPE html>
<html>
<head>
    <title>Data Pengelola Pasar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Tambah Data Pengelola Pasar </h4>
            </div>
            <div class="panel-body">
               <form action="{{url('pengelolapasar/create')}}" method="get"> 
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-primary">
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
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($pengelolapasar as $Pengelolapasar)
                        <tr>
                            <td>{{ $Pengelolapasar->nama }}</td>
                            <td>{{ $Pengelolapasar->nomor_telepon }}</td>
                            <td>{{ $Pengelolapasar->alamat }}</td>
                            <td>{{ $Pengelolapasar->tanggal_lahir }}</td>
                            <td>
                            @if(in_array(pathinfo($Pengelolapasar->foto_ktp,PATHINFO_EXTENSION), ['png','jpg','JPEG']))
                 <img src="{{asset('file_upload')}}/{{$Pengelolapasar->foto_ktp}}" style="height:5cm">        
             @else
                 FAIL    
            @endif 
                        </td>
                            <td>{{ $Pengelolapasar->email }}</td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>