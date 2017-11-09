<?php

use Illuminate\Database\Seeder;

class CargarPeliculas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pelicula::class)->times(5)->create();
    }
}
