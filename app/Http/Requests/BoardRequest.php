<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'board.name' => 'required|string|max:100',
        ];
    }
}
