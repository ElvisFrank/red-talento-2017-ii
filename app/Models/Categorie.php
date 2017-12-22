<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table='categories';

    protected $fillable=['name','description','image'];

    public function publications()
    {
    	return $this->hasMany('App\Models\Publication');
    }
}
