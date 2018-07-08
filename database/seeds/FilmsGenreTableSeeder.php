<?php

use Illuminate\Database\Seeder;

class FilmsGenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films_genre')->insert([
            'film_id' => random_int(1,4),
            'genre_id' => random_int(1,4),
        ]);
    }
}
