<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;


class BoardController extends Controller
{
    public function index(Board $board)
    {
        return view('boards.index')->with(['boards' => $board->get()]);
       //blade内で使う変数'boards'と設定。'boards'の中身にgetを使い、インスタンス化した$boardを代入。
    }
    
}
