<!DOCTYPE html>
<html>
<head>
    <title>Event Diskon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Event Diskon</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('create')}}" method="get">
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
                        @foreach($data as $key => $id_event_diskon)
                        <tr>
                            <td>{{ $d->kalender }}</td>
                            <td>{{ $d->deskripsi }}</td>
                            <td>{{ $d->produk_event }}</td>
                            <td>{{ $d->voucher_diskon }}</td>
                            <td>{{ $d->toko_event }}</td>
                            <td>
                                <a href="{{url('read',array($d->id_event_diskon))}}">Read</a>
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