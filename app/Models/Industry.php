<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Industry extends Model
{
    use HasFactory;
    
    
    public function User()
    {
        return $this->hasMany(User::class);
    }
    
    public function Board()
    {
        return $this->hasMany(Board::class);
    }
}
