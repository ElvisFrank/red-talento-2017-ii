<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table='files';

    protected $fillable=['publication_id','name','direction'];

    public function publication()
    {
    	return $this->belongsTo('App\Models\Publication');
    }
}
