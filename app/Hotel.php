<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the Comments on the Hotel
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
