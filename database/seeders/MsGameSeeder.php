<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ms_games')->insert([
            'title' => 'Counter-Strike: Global Offensive',
            'image' => 'gameImage/csgo.png',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 0,
            'pegi_rating' => 16,
            'game_genre_id' => 3
        ]);

        DB::table('ms_games')->insert([
            'title' => 'Playerunknowns Battlegrounds',
            'image' => 'gameImage/pubg.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 30,
            'pegi_rating' => 18,
            'game_genre_id' => 3
        ]);

        DB::table('ms_games')->insert([
            'title' => 'Apex Legends',
            'image' => 'gameImage/apex.jpeg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 0,
            'pegi_rating' => 16,
            'game_genre_id' => 3
        ]);

        DB::table('ms_games')->insert([
            'title' => 'Grand Theft Auto V',
            'image' => 'gameImage/gta5.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 20,
            'pegi_rating' => 18,
            'game_genre_id' => 4
        ]);

        DB::table('ms_games')->insert([
            'title' => 'Ark: Survival Evolved',
            'image' => 'gameImage/ark.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 10,
            'pegi_rating' => 7,
            'game_genre_id' => 5
        ]);

        DB::table('ms_games')->insert([
            'title' => 'Terraria',
            'image' => 'gameImage/terraria.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 5,
            'pegi_rating' => 3,
            'game_genre_id' => 4
        ]);

        DB::table('ms_games')->insert([
            'title' => 'Red Dead Redemption 2',
            'image' => 'gameImage/reddead.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 50,
            'pegi_rating' => 16,
            'game_genre_id' => 1
        ]);

        DB::table('ms_games')->insert([
            'title' => 'Warcraft III: Reign of Chaos',
            'image' => 'gameImage/warcraft3.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 30,
            'pegi_rating' => 18,
            'game_genre_id' => 6
        ]);

        DB::table('ms_games')->insert([
            'title' => 'StarCraft III: Wings of Liberty',
            'image' => 'gameImage/starcraft3.png',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 0,
            'pegi_rating' => 18,
            'game_genre_id' => 6
        ]);

        DB::table('ms_games')->insert([
            'title' => 'Pac Man',
            'image' => 'gameImage/pacman.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae corporis praesentium deleniti. At quos aspernatur eos, maxime a fuga, dicta facere ex tempora, omnis cupiditate consequatur officia laudantium accusantium nesciunt!',
            'price' => 400,
            'pegi_rating' => 0,
            'game_genre_id' => 2
        ]);
    }
}
