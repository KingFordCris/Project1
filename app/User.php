<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
       'id_num', 'name', 'email', 'password','admin','is_confirmed',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public $hidden = [
        'password', 'remember_token',
    ];
    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
    public function is_admin()
    {
        if($this->admin)
        {
            return true;
        }
        return false;
    }
    public function profile()
    {
        return $this->hasone(Profile::class);
    }
}
