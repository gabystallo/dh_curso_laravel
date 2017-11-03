<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    
	protected $table = 'actors';

	public function peliculas()
	{
		return $this->belongsToMany(Pelicula::class, 'actor_movie', 'actor_id', 'movie_id');
	}

}
