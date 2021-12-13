<?php

namespace Database\Seeders;

use App\Models\MsGameGenre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MsRoleSeeder::class);
        $this->call(MsUserSeeder::class);

        $this->call(MsGameGenreSeeder::class);
        $this->call(MsGameSeeder::class);
    }
}
