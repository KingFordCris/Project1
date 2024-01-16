<?php
namespace App;
class Scholarship extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scholars()
    {
        return $this->hasMany(Scholar::class);
    }
    public function Profile()
    {
        return $this->hasMany(Profile::class);
    }
}
