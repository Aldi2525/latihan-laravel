<!DOCTYPE html>
<html>
    <title>Aldi</title>
    <head>
        <body>
            <center><h1>Data Post Supplier </h1></center>
            @foreach ($data as $item)
                <p>{{$item->id_suplier}}</p>
                <p>{{$item->nama}}</p>
                <p>{{$item->alamat}}</p>
                <p>{{$item->kode_pos}}</p>
                <p>{{$item->kota}}</p>
                <hr>
            @endforeach
        </body>
    </head>
</html>
