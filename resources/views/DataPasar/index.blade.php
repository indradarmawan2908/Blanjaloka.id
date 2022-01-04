<!DOCTYPE html>
<html>
<head>
    <title>Data Pasar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Data Pasar </h4>
            </div>
            <div class="panel-body">
                <form action="{{url('datapasar/create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-light">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Profile Pasar</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($datapasar as $Datapasar)
                        <tr>
                            <td>{{ $Datapasar->nama }}</td>
                            <td>{{ $Datapasar->alamat }}</td>
                            <td>{{ $Datapasar->profile_pasar }}</td>
                            
                            
                            <td>
                                <a href="{{url('datapasar/delete',array($Datapasar->id_datapasar))}}">Delete</a>
                                <a href="{{url('datapasar/edit',array($Datapasar->id_datapasar))}}">Edit</a>
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