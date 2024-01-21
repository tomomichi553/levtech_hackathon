<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           業界：{{ Auth::user()->industry->name }}  掲示板の名前(要編集)'{{--{{$post->board->name--}}
        </h2>
    </x-slot>
    <h2>投稿一覧</h2>
    <a href='/posts/create'>新規投稿</a>
    <div>
        @foreach ($posts as $post)
            <div style='border:solid 1px; margin-bottom: 10px;'>
                <p>
                    タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </p>
                <p>カテゴリー：{{ $post->category->name }}</a></p>
                <p>本文：{{$post->body}}</p>
                <p>ユーザー：{{$post->user->name}}</p>
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">削除</button> 
                </form>
            </div>
        @endforeach
    </div>
    <div>
        {{ $posts->links() }}
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
