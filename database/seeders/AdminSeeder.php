<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adm = [
            'name' => 'Admin',
            'email'=> 'admin@gmail.com',
            'level' => 'admin',
            'password' => Hash::make('admin123')
        ];
        DB::table('users')->insert($adm);
    }
}
