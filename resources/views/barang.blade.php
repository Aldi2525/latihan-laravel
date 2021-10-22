<!DOCTYPE html>
<html>
    <title>Aldi</title>
    <head>
        <body>
            <center><h1>Data Post Barang</h1></center>
            @foreach ($data as $item)
                <p>{{$item->id_barang}}</p>
                <h2>{{$item->nama}}</h2>
                <p>{{$item->varian}}</p>
                <p>{{$item->harga_beli}}</p>
                <p>{{$item->harga_jual}}</p
                <hr>
            @endforeach
        </body>
    </head>
</html>
