<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the Hotel that the Comment belongs to
     */
    public function hotel()
    {
        return $this->belongsTo('App\UserRole');
    }

    /**
     * Get the User that the comment belongs to
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
