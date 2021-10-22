<!DOCTYPE html>
<html>
    <title>Aldi</title>
    <head>
        <body>
            <center><h1>Data Post Pembelian</h1></center>
            @foreach ($data as $item)
                <p>{{$item->id_pembelian}}</p>
                <p>{{$item->nama_barang}}</p>
                <h2>{{$item->nama_supplier}}</h2>
                <p>{{$item->qty}}</p>
                <p>{{$item->tgl}}</p
                <hr>
            @endforeach
        </body>
    </head>
</html>
