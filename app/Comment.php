<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    protected $dates = ['deleted_at'];
    use SoftDeletes;
    public function post()
    {
        return $this->belongsto(Post::class);
    }
    public function user()
    {
        return $this->belongsto(User::class);
    }
}
