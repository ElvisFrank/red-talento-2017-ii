<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
class Publication extends Model
{
    use Sluggable;
    protected $table='publications';

    protected $fillable=['categorie_id','user_id','title','publication'];

    /*Sluggable funcion optimisacion de url, mejor posicionamiento en busqueda de google*/
    public function sluggable()
    {
    	return ['slug'=>[
    		'source'=>'title'
    	]];
    }


    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function files()
    {
    	return $this->hasMany('App\Models\File');
    }

    public function categorie()
    {
    	return $this->belongsTo('App\Models\Categorie');
    }

    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }

    /*mi funcion para buscar*/
    public function scopeBuscar($query, $name)
    {
        return $query->where('title','LIKE',"%$name%");
    }
}
