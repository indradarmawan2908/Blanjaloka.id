<!DOCTYPE html>
<html>
<head>
    <title>Halaman Mengedit Data Pedagang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Mengedit Data Pedagang</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('pedagang/update', $pedagang->id_pedagang)}}" method="post">
                    
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$pedagang->nama}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{$pedagang->nomor_telepon}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{$pedagang->alamat}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{$pedagang->tanggal_lahir}}" class="form-control">
                    </div>                      
                    <div class="form-group">
                        <label for="no_ktp">No KTP</label>
                        <input type="text" name="no_ktp" id="no_ktp" value="{{$pedagang->no_ktp}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto_ktp">Foto KTP</label>
                        <input type="file" name="foto_ktp" id="foto_ktp" value="{{$pedagang->foto_ktp}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Data Pedagang</label>
                        <input type="text" name="data_pedagang" id="data_pedagang" value="{{$pedagang->data_pedagang}}" class="form-control">
                    </div>   
                    <div class="form-group">
                        <label for="nama">Nomor Rekening</label>
                        <input type="text" name="nomor_rekening" id="nomor_rekening" value="{{$pedagang->nomor_rekening}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kendaraan">Foto Rekening</label>
                        <input type="file" name="foto_rekening" id="foto_rekening" value="{{$pedagang->foto_rekening}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status_pembayaran">Status Pembayaran</label>
                        <input type="option" name="status_pembayaran" id="status_pembayaran" value="{{$pedagang->status_pembayaran}}" class="form-control">
                    </div>         
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Update" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>