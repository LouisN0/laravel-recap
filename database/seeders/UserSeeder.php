<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Webmaster',
            'email' => 'webmaster@gmail.com',
            'password' => Hash::make('webmaster@gmail.com'),
            'role_id' => 2,
        ]);
    }
}
