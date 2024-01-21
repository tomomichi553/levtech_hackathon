<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use App\Http\Requests\BoardRequest;


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
        $board->industry_id = Auth::user()->industry->id;
        $board->fill($input)->save();
        return redirect('/boards' . $board->id);
    }
}
