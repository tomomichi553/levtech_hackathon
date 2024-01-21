<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('掲示板の名前(要編集){{--{{$post->board->name--}}') }}
        </h2>
    </x-slot>
        <h1>詳細画面</h1>
        <div>
            <p>タイトル：{{ $post->title }}</p>
            <p>本文：{{ $post->body }}</p>
            <p>カテゴリー：{{ $post->category->name }}</a></p>
        </div>
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $post->id }})">削除</button> 
            </form>
            <a href="/">戻る</a>
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
