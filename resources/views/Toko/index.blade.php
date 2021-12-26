<!DOCTYPE html>
<html>
<head>
    <title>Data Toko</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Toko </h4>
            </div>
            <div class="panel-body">
            <form action="{{url('toko/create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Titik Kordinat</th>
            <th>Foto Profil Toko</th>
            <th>Action</th>         
        </tr>

       @foreach ($toko as $Toko)
       <tr>
           <td>{{$Toko->id_toko}}</td>
           <td>{{$Toko->nama}}</td>
           <td>{{$Toko->alamat}}</td>
		   <td>{{$Toko->titik_kordinat}}</td>
           <td>
             @if(in_array(
                 pathinfo($Toko->foto_profiltoko,PATHINFO_EXTENSION), ['png','jpg','JPEG']))
                 <img src="{{asset('file_upload')}}/{{$Toko->foto_profiltoko}}" style="height:5cm">        
             @else
                 FAIL    
            @endif 
           </td>
        
        <td>
            <a href="{{url('toko/edit')}}/{{$Toko->id_toko}}" class="btn btn-primary"> Edit </a>
            <a href="{{url('toko/delete')}}/{{$Toko->id_toko}}" class="btn btn-primary"> Delete </a>
        </td>
       </tr>
        @endforeach        
        </table>       
      
    </body>
</html>