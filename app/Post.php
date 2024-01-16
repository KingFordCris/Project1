<?php
namespace App;
class Post extends Model
{
    public function comments()
    {
        return $this->hasmany(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function addComment($body)
    {
        // THIS IS A LONG WAY 
        // Comment::create
        // ([
        //     'body' => $body,
        //     'post_id' => $this->id 
        // ]);
        // THIS IS A SHORTER WAY
        $this->comments()->create(compact('body'));
    }
    public function delete()
    {
       
        $this->comments()->delete();
        return parent::delete();
    }
}
