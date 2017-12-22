<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'name','last_name','presentation','type','photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function publications()
    {
        return $this->hasMany('App\Models\Publication');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function responses()
    {
        return $this->hasMany('App\Models\Response');
    }
}
