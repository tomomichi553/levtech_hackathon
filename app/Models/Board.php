<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    
    
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    
    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}

