<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('掲示板作成') }}
        </h2>
    </x-slot>
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
</x-app-layout>