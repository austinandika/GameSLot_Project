<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ms_users')->insert([
            'name' => 'Admin 1',
            'photo' => null,
            'email' => 'admin1@gameslot.com',
            'password' => Hash::make('admin1'),
            'gender' => 'Male',
            'date_of_birth' => date('Y-m-d H:i:s', strtotime('12/13/2021')),
            'role_id' => 1
        ]);
    }
}
