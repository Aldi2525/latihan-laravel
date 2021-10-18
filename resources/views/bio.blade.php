<!DOCTYPE html>
<html>
    <title>Aldi</title>
    <head>
        <body>
            <center><h1>Data Post BIODATA</h1></center>
            @foreach ($query as $item)
                <p>{{$item->id}}</p>
                <h2>{{$item->name}}</h2>
                <p>{{$item->bornDate}}</p>
                <p>{{$item->gender}}</p>
                <p>{{$item->address}}</p>
                <p>{{$item->religion}}</p>
                <p>{{$item->age}}</p>
                <p>{{$item->hobby}}</p>
                <hr>
            @endforeach
        </body>
    </head>
</html>
