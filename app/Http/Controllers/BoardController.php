<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\BoardRequest;
use Illuminate\Support\Facades\Auth;


class BoardController extends Controller
{
    public function index(Board $board)
    {
        return view('boards.index')->with(['boards' => $board->get()]);
       //blade内で使う変数'boards'と設定。'boards'の中身にgetを使い、インスタンス化した$boardを代入。
    }
    
    public function create()
    {
        return view('boards.create');
    }
    
    public function store(Board $board, BoardRequest $request)
    {
        $input = $request['board'];

        $board->industry_id = Auth::user()->industry_id;
        $board->fill($input)->save();
        return redirect('/' );
    }
    
    public function show(Board $board,Post $post){
        $query = $post->where('board_id', $board->id)->get();
        return view('boards/show')->with(['board' => $board,'posts'=>$query]);
    }
    
    public function edit(Board $board)
    {
    return view('boards.edit')->with(['board' => $board]);;
    }
    
    public function update(Board $board,BoardRequest $request)
    {
        $input = $request['board'];
        $board->industry_id = \Auth::user()->industry_id;
        $board->fill($input)->save();
        return redirect('/');
    }
}
