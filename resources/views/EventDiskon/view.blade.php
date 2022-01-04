<!DOCTYPE html>
<html>
<head>
    <title>Event Diskon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Event Diskon</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('eventdiskon/create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kalender</th>
                            <th>Deskripsi</th>
                            <th>Produk Event</th>
                            <th>Voucher Diskon</th>
                            <th>Toko Event</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($eventdiskon as $EventDiskon)
                        <tr>
                            <td>{{ $EventDiskon->kalender }}</td>
                            <td>{{ $EventDiskon->deskripsi }}</td>
                            <td>{{ $EventDiskon->produk_event }}</td>
                            <td>{{ $EventDiskon->voucher_diskon }}</td>
                            <td>{{ $EventDiskon->toko_event }}</td>
                            <td>
                                <a href="{{url('eventdiskon/delete',array($EventDiskon->id_event_diskon))}}">Hapus</a>
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