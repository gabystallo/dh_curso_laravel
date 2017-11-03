<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelicula extends Model
{
    use SoftDeletes;

    protected $table = 'movies';

    protected $fillable = ['title', 'rating', 'release_date'];


    public function tituloConRating()
    {
    	return $this->title . ' (' . $this->rating . ')';
    }

    // public function url()
    // {
    // 	return '/pelicula/' . $this->id;
    // }


    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genre_id');
    }

    public function actores()
    {
        return $this->belongsToMany(Actor::class, 'actor_movie', 'movie_id', 'actor_id');
    }
}
