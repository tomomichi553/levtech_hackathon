<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('掲示板編集') }}
        </h2>
    </x-slot>
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
</x-app-layout>