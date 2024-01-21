<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$board->name}}
            </h2>
            <a href='/posts/create/{{ $board->id }}' class="bg-black text-white font-bold mx-10 py-5 px-10 rounded-full shadow-xl hover:bg-gray-dark hover:text-white ">新規投稿</a>
        </div>
    </x-slot>
        <h1>投稿一覧</h1>
        
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                    <p>カテゴリー：{{ $post->category->name }}</a></p>
                    <p>本文：{{$post->body}}</p>
                    <p>ユーザー：{{$post->user->name}}</p>
                    <div class="flex items-center">
                        <p class="edit"><a class="bg-blue-600 hover:bg-blue-500 text-white rounded px-4 py-2 mx-4" href="/posts/{{ $post->id }}/edit">編集</a></p>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="bg-red-600 hover:bg-red-500 text-white rounded px-4 py-2 mx-4" onclick="deletePost({{ $post->id }})">削除</button> 
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('この投稿を削除しますか')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
</x-app-layout>
