<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('掲示板の名前(要編集){{--{{$post->board->name--}}') }}
        </h2>
    </x-slot>
        <h2>投稿作成</h2>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="text" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div>
                <h2>本文</h2>
                <textarea name="post[body]" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" rows="3" placeholder="投稿内容">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2>カテゴリー</h2>
                <select name="post[category_id]" class="'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" value={{ Auth::user()->id }} name="post[user_id]" >
            <input type="hidden" value={{ $board->id }} name="post[board_id]" >
            <input type="submit" value="投稿" />
        </form>
        <div><a href="/">戻る</a></div>
</x-app-layout>
