<!DOCTYPE html>
<html>
<head>
    <title>Halaman Mengedit Data Driver</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Mengedit Data Driver</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('driver/update', $driver->kode_driver)}}" method="post">
                   
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$driver->nama}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{$driver->nomor_telepon}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{$driver->alamat}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{$driver->tanggal_lahir}}" class="form-control">
                    </div>                      
                    <div class="form-group">
                        <label for="no_ktp">No KTP</label>
                        <input type="text" name="no_ktp" id="no_ktp" value="{{$driver->no_ktp}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto_ktp">Foto KTP</label>
                        <input type="file" name="foto_ktp" id="foto_ktp" value="{{$driver->foto_ktp}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Data Driver</label>
                        <input type="text" name="data_driver" id="data_driver" value="{{$driver->data_driver}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kendaraan">Kendaraan</label>
                        <input type="option" name="kendaraan" id="kendaraan" value="{{$driver->kendaraan}}" class="form-control">
                    </div>    
                    <div class="form-group">
                        <label for="nomor_kendaraan">Nomor Kendaraan</label>
                        <input type="text" name="nomor_kendaraan" id="nomor_kendaraan" value="{{$driver->nomor_kendaraan}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto_stnk">Foto STNK</label>
                        <input type="file" name="foto_stnk" id="foto-stnk" value="{{$driver->foto_stnk}}" class="form-control">
                    </div>   
                    <div class="form-group">
                        <label for="nama">Nomor Rekening</label>
                        <input type="text" name="nomor_rekening" id="nomor_rekening" value="{{$driver->nomor_rekening}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kendaraan">Foto Rekening</label>
                        <input type="file" name="foto_rekening" id="foto_rekening" value="{{$driver->foto_rekening}}" class="form-control">
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