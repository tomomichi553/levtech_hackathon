<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('掲示板一覧') }}
        </h2>
    </x-slot>
        <h1>掲示板一覧</h1>
        <a href='/boards/create'>作成</a>
        <div class = 'boards'>
            @foreach ($boards as $board)
                <div class = 'board'>

                    <h2 class='title'><a href="/boards/{{$board->id}}">{{ $board->name }}</a></h2>

                    
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
</x-app-layout>