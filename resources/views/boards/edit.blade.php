<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Board</title>
    </head>
    <body>
    <h1 class="title">掲示板編集</h1>
    <div class="content">
        <form action="/boards/{{ $board->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content_title'>
                <h2>タイトル</h2>
                <input type='text' name='board[name]' value="{{ $board->name }}">
                <input type="hidden" value={{ Auth::user()->id }} name="board[user_id]" >
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
        
</html>