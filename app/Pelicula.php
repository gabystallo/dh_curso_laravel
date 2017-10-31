<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'movies';


    public function tituloConRating()
    {
    	return $this->title . ' (' . $this->rating . ')';
    }

    // public function url()
    // {
    // 	return '/pelicula/' . $this->id;
    // }
}
