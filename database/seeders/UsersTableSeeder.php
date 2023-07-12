<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Ridhal Fajri',
            'username' => 'ridhal',
            'kelas_id' => '1',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'nama' => 'Tom Riddle',
            'username' => 'tom',
            'kelas_id' => '2',
            'password' => Hash::make('password'),
        ]);
    }
}
