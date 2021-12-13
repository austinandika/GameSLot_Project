<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsGameGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ms_game_genres')->insert([
            'genre' => 'RPG'
        ]);

        DB::table('ms_game_genres')->insert([
            'genre' => 'Arcade'
        ]);

        DB::table('ms_game_genres')->insert([
            'genre' => 'FPS'
        ]);

        DB::table('ms_game_genres')->insert([
            'genre' => 'Sandbox'
        ]);

        DB::table('ms_game_genres')->insert([
            'genre' => 'Survival'
        ]);

        DB::table('ms_game_genres')->insert([
            'genre' => 'RTS'
        ]);

        DB::table('ms_game_genres')->insert([
            'genre' => 'MMORPG'
        ]);

        DB::table('ms_game_genres')->insert([
            'genre' => 'Open World'
        ]);
    }
}
