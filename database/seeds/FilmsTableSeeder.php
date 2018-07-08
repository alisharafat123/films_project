<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'name' => str_random(10),
            'description' => str_random(10),
            'release_date' => date('Y-m-d'),
            'ticket_price' => random_int(100,200),
            'slug' => str_random(10),
            'country_id' => str_random(10),
        ]);
    }
}
