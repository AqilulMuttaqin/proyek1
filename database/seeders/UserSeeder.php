<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => 'aqil',
                'email'=> 'aqil@gmail.com',
                'level' => 'user',
                'password' => Hash::make('aqil1234')
            ],
            [
                'name' => 'afif',
                'email'=> 'afif@gmail.com',
                'level' => 'user',
                'password' => Hash::make('afif1234')
            ],
            [
                'name' => 'billie',
                'email'=> 'billie@gmail.com',
                'level' => 'user',
                'password' => Hash::make('billie123')
            ]
            ]);
    }
}
