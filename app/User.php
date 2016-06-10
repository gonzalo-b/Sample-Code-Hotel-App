<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the User's Comments
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /*
     * Return true if id = 1
     */
    public function isAdmin(){
        return $this->id == 1;
    }
}
