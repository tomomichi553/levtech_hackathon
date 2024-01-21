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
                    <h2 class='title'>{{ $board->name }}</h2>
                    <div class="edit">
                        <a href="/boards/{{ $board->id }}/edit">edit</a>
                    </div>
                    <form action="/boards/{{ $board->id }}" id="form_{{ $board->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $board->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        `form_${id}`
    </body>
</html>