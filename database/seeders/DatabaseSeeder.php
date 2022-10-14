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

        $user = User::factory()->create([
            'username' => 'redberry',
            'email' => 'test@redberry.ge',
        ]);

        $movie = Movie::create([
            'user_id' => $user->id,
            'slug' => 'matrix',
            'title' => ['en'=> 'Matrix',
                'ka'=> 'მატრიცა'  ],
        ]);


        Quote::create([
            'user_id' => $user->id,
            'movie_id' => $movie->id,
            'body' => ['en'=> "I don't like the idea that I'm not in control of my life",
                'ka'=> 'არ მომწონს ის აზრი რომ თითქოს ჩემს ცხოვრებას მე არ ვაკონტროლებ'  ],
            'thumbnail' => 'thumbnails/SdVAogFb0uiXEucH76zIHrfezko1efqdJ6l0pgR7.jpg'
        ]);

        Quote::create([
            'user_id' => $user->id,
            'movie_id' => $movie->id,
            'body' => ['en'=> "Denial is the most predictable of all human responses",
                'ka'=> 'უარყოფა ყველაზე მოსალოდნელი ადამიანური რეაქციაა'  ],
            'thumbnail' => 'thumbnails/YOiqFxjoOClDlhJb3E1U2qIhPjY5N7CdN6OBttEm.webp'
        ]);

        }





}
