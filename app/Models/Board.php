<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Board extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'name',
    'user_id',
    'industry_id'
    ];
    
    //リレーション
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

