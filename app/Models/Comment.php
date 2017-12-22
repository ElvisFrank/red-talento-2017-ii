<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';

    protected $fillable=['user_id','publication_id','comment'];

    public function publication()
    {
    	return $this->belongsTo('App\Models\Publication');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function responses()
    {
    	return $this->hasMany('App\Models\Response');
    }
}
