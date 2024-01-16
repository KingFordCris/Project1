<?php

namespace App;


class Profile extends Model
{
    // public function scholarship()
    // {
    //     return $this->hasmany(Scholarship::class);
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }

}
