<!DOCTYPE html>
<html>
    <title>Aldi</title>
    <head>
        <body>
            <center><h1>Data Post Pesanan </h1></center>
            @foreach ($data as $item)
                <p>{{$item->id_pesanan}}</p>
                <h2>{{$item->nama_pelanggan}}</h2>
                <p>{{$item->nama_barang}}</p>
                <p>{{$item->qty}}</p>
                <p>{{$item->tgl_pesanan}}</p
                <hr>
            @endforeach
        </body>
    </head>
</html>
