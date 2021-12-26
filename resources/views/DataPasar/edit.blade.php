<!DOCTYPE html>
<html>
<head>
    <title>Halaman Mengedit Data Pasar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Mengedit Data Pasar</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('datapasar/update', $datapasar->id_datapasar)}}" method="post">
                   
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$datapasar->nama}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{$datapasar->alamat}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="profile_pasar">Profile Pasar</label>
                        <input type="text" name="profile_pasar" id="profil_pasar" value="{{$datapasar->profile_pasar}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>