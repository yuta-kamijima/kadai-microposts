<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    // この投稿を所有するユーザー
    public function user()
    {
        return $this->belongsto(User::class);
    }
}
