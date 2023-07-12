<?php

namespace Database\Seeders;

use App\Models\Angkatan;
use Illuminate\Database\Seeder;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Angkatan::create([
            'nama' => 'X'
        ]);
        Angkatan::create([
            'nama' => 'XI'
        ]);
        Angkatan::create([
            'nama' => 'XII'
        ]);
    }
}
