<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>掲示板一覧</h1>
        <a href='/boards/create'>作成</a>
        <div class = 'boards'>
            @foreach ($boards as $board)
                <div class = 'board'>
                    <h2 class='title'><a href="/boards/{{$board->id}}">{{ $board->name }}</a></h2>
                </div>
            @endforeach
        </div>
    </body>
</html>