<!DOCTYPE html>
<html>
<head>
    <title>Membuat Event Diskon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Membuat Event Diskon</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('insert')}}" method="post">
                    <div class="form-group">
                        <label for="kalender">Kalender</label>
                        <input type="date" name="kalender" id="kalender" class="form-control" required="require">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                    </div>     
                    <div class="form-group">
                        <label for="produk_event">Produk Event</label>
                        <input type="text" name="produk_event" id="produk_event" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="voucher_dison">Voucher Diskon</label>
                        <input type="date" name="voucher-diskon" id="voucher_diskon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="toko_event">Toko Event</label>
                        <input type="text" name="toko_event" id="toko_event" class="form-control">
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