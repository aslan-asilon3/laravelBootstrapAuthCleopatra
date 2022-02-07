<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'aslanadmin',
            'email' => 'aslanadmin@gmail.com',
            'password' => Hash::make('aslanadmin'),
        ]);
 
        DB::table('users')->insert([
            'name' => 'aslanuser',
            'email' => 'aslanuser@gmail.com',
            'password' => Hash::make('aslanuser'),
        ]);

    }
}
