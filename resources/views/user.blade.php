<!DOCTYPE html>
<html>
    <head>
        <title>Aldi BLOG</title>
    </head>
    <body>
        <ul> @foreach($posts as $user)

                id : {{$user['id']}}<br>
                Name : {{$user['name']}}<br>
                Username : {{$user['username']}}<br>
                Email : {{$user['email']}}<br>
                Alamat : {{$user['alamat']}}<br>
                Mata Pelajaran :
                 @foreach ($user['mapel'] as $data2)
                <ul><li>{{$data2['mapelar']}} </li></ul>
                 @endforeach

<br>
            @endforeach
        </ul>
    </body>
</html>
