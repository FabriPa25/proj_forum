<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{   
    protected $fillable = [
        'message',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
