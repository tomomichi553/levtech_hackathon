<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>掲示板作成</h1>
        <form action="/boards" method="POST">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="text" name="board[name]" placeholder="掲示板の名前" value="{{ old('board.name') }}"/>
                <p class="name_error" style="color:red">{{ $errors->first('board.name') }}</p>
            </div>
            <input type="hidden" value={{ Auth::user()->id }} name="board[user_id]" >
            <input type="submit" value="作成"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>