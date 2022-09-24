<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory(10)->create([
        ]);
        foreach ($user as $users) {
        $movie = Movie::factory()->create([
            'user_id' => $users->id
        ]);

//        foreach ($user as $users) {
//        $users_id = $users->id;
        Quote::factory()->create([
            'user_id' => $users->id,
            'movie_id' => $movie->id
        ]);

        }
    }




}
