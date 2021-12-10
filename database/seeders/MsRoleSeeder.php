<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ms_roles')->insert([
            'name' => 'admin'
        ]);

        DB::table('ms_roles')->insert([
            'name' => 'member'
        ]);
    }
}
