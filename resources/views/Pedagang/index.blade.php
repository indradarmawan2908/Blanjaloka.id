<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pedagang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>List Pedagang</h4>
            </div>
            <div class="panel-body">
            <form action="{{url('pedagang/create')}}" method="get"> 
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-info">
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
                            <th>Data Pedagang</th>
                            <th>Nomor Rekening</th>
                            <th>Foto Rekening</th>
                            <th>Status Pembayaran</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($pedagang as $Pedagang)
                        <tr>
                            <td>{{ $Pedagang->nama }}</td>
                            <td>{{ $Pedagang->nomor_telepon }}</td>
                            <td>{{ $Pedagang->alamat }}</td>
                            <td>{{ $Pedagang->tanggal_lahir }}</td>
                            <td>{{ $Pedagang->no_ktp }}</td>
                            <td>
             @if(in_array(
                 pathinfo($Pedagang->foto_ktp,PATHINFO_EXTENSION), ['png','jpg','JPEG']))
                 <img src="{{asset('file_upload')}}/{{$Pedagang->foto_ktp}}" style="height:5cm">        
             @else
                 FAIL    
            @endif 
           </td>
                            <td>{{ $Pedagang->data_pedagang }}</td>
                            <td>{{ $Pedagang->status_pembayaran }}</td>
                            <td>{{ $Pedagang->nomor_rekening }}</td>
                            <td>
             @if(in_array(
                 pathinfo($Pedagang->foto_rekening,PATHINFO_EXTENSION), ['png','jpg','JPEG']))
                 <img src="{{asset('file_upload')}}/{{$Pedagang->foto_rekening}}" style="height:5cm">        
             @else
                 FAIL    
            @endif 
           </td>
                            <td>
                                <a href="{{url('pedagang/delete',array($Pedagang->id_pedagang))}}">Delete</a>
                                <a href="{{url('pedagang/edit',array($Pedagang->id_pedagang))}}">Edit</a>
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