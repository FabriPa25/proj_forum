<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image'
    ];

    public function messages()
{
    return $this->hasMany(Message::class);
}

}
