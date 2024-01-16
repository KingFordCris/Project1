<?php

namespace App;

class Scholar extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }
}
