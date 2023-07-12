<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var = ['I', 'II'];
        for ($d = 1; $d < 4; $d++) {

            for ($i = 1; $i < 4; $i++) {
                Kelas::create([
                    'angkatan_id' => $d,
                    'nama' => 'X IPA ' . $i
                ]);
            }
            for ($i = 1; $i < 4; $i++) {
                Kelas::create([
                    'angkatan_id' => $d,
                    'nama' => 'X IPS ' . $i
                ]);
            }
        }
    }
}
