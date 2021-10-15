<!DOCTYPE html>
<html>
    <head>
        <title>Aldi BLOG</title>
    </head>
    <body>
        <ul>
            @foreach ( $posts as $data)
                id : {{$data['id']}}<br>
                Judul : {{$data['title']}}<br>
                Content : {{$data['content']}}<br><hr>
            @endforeach
        </ul>
    </body>
</html>
