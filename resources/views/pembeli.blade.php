<!DOCTYPE html>
<html>
    <title>Aldi</title>
    <head>
        <body>
            <center><h1>Data Post Pembeli </h1></center>
            @foreach ($data as $item)
                <p>{{$item->id_pembeli}}</p>
                <p>{{$item->nama}}</p>
                <h2>{{$item->jns_kelamin}}</h2>
                <p>{{$item->alamat}}</p>
                <p>{{$item->kode_pos}}</p>
                <p>{{$item->kota}}</p>
                <p>{{$item->tgl_lahir}}</p
                <hr>
            @endforeach
        </body>
    </head>
</html>
