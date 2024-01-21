<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('掲示板一覧') }}
            </h2>
            <a href='/boards/create' class="bg-black text-white font-bold mx-10 py-5 px-10 rounded-full shadow-xl hover:bg-gray-dark hover:text-white ">作成</a>
        </div>
    </x-slot>
        
        <div class = 'boards'>
            @foreach ($boards as $board)
                <div class = 'w-3/4 m-auto'>

                    <h2 class='title'><a class="my-5 font-semibold text-xl text-gray-800 leading-tight" href="/boards/{{$board->id}}">{{ $board->name }}</a></h2>

                    <div class="flex items-center">
                        <div class="edit">
                            <a class="bg-blue-600 hover:bg-blue-500 text-white rounded px-4 py-2 mx-4" href="/boards/{{ $board->id }}/edit">編集</a>
                        </div>
    
                        <form action="/boards/{{ $board->id }}" id="form_{{ $board->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 hover:bg-red-500 text-white rounded px-4 py-2 mx-4" type="button" onclick="deletePost({{ $board->id }})">削除</button> 
                        </form>
                    </div>


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