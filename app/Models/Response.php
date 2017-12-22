<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table='responses';

    protected $fillable=['comment_id','user_id','response'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function comment()
    {
    	return $this->belongsTo('App\Models\Comment');
    }
}
