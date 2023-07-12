<?php

namespace Database\Seeders;

use App\Models\KelasPelajaran;
use Illuminate\Database\Seeder;

class KelasPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            KelasPelajaran::create([
                'kelas_id' => 1,
                'mata_pelajaran_id' => $i
            ]);
            KelasPelajaran::create([
                'kelas_id' => 2,
                'mata_pelajaran_id' => $i
            ]);
            KelasPelajaran::create([
                'kelas_id' => 3,
                'mata_pelajaran_id' => $i
            ]);
        }
        $var = [1, 2, 3, 4, 5, 6, 7, 11, 12, 13, 14];
        for ($i = 1; $i < 12; $i++) {
            KelasPelajaran::create([
                'kelas_id' => 4,
                'mata_pelajaran_id' => $var[$i - 1]
            ]);
            KelasPelajaran::create([
                'kelas_id' => 5,
                'mata_pelajaran_id' => $var[$i - 1]
            ]);
            KelasPelajaran::create([
                'kelas_id' => 6,
                'mata_pelajaran_id' => $var[$i - 1]
            ]);
        }
        for ($i = 1; $i < 11; $i++) {
            KelasPelajaran::create([
                'kelas_id' => 7,
                'mata_pelajaran_id' => $i
            ]);
            KelasPelajaran::create([
                'kelas_id' => 8,
                'mata_pelajaran_id' => $i
            ]);
            KelasPelajaran::create([
                'kelas_id' => 9,
                'mata_pelajaran_id' => $i
            ]);
        }
        for ($i = 1; $i < 12; $i++) {
            KelasPelajaran::create([
                'kelas_id' => 10,
                'mata_pelajaran_id' => $var[$i - 1]
            ]);
            KelasPelajaran::create([
                'kelas_id' => 11,
                'mata_pelajaran_id' => $var[$i - 1]
            ]);
            KelasPelajaran::create([
                'kelas_id' => 12,
                'mata_pelajaran_id' => $var[$i - 1]
            ]);
        }
        for ($i = 1; $i < 11; $i++) {
            KelasPelajaran::create([
                'kelas_id' => 13,
                'mata_pelajaran_id' => $i
            ]);
            KelasPelajaran::create([
                'kelas_id' => 14,
                'mata_pelajaran_id' => $i
            ]);
            KelasPelajaran::create([
                'kelas_id' => 15,
                'mata_pelajaran_id' => $i
            ]);
        }
        for ($i = 1; $i < 12; $i++) {
            KelasPelajaran::create([
                'kelas_id' => 16,
                'mata_pelajaran_id' => $var[$i - 1]
            ]);
            KelasPelajaran::create([
                'kelas_id' => 16,
                'mata_pelajaran_id' => $var[$i - 1]
            ]);
            KelasPelajaran::create([
                'kelas_id' => 18,
                'mata_pelajaran_id' => $var[$i - 1]
            ]);
        }
    }
}
