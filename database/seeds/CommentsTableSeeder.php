<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'film_id' => random_int(1,6),
            'user_id' => random_int(1,6),
            'comment' => str_random(100)
        ]);
    }
}
