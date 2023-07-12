<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataPelajaran::create([
            'nama' => 'Agama'
        ]);
        MataPelajaran::create([
            'nama' => 'Pendidikan Kewarganegaraan'
        ]);
        MataPelajaran::create([
            'nama' => 'Bahasa Indonesia'
        ]);
        MataPelajaran::create([
            'nama' => 'Matematika'
        ]);
        MataPelajaran::create([
            'nama' => 'Bahasa Inggris'
        ]);
        MataPelajaran::create([
            'nama' => 'Seni dan Prakarya'
        ]);
        MataPelajaran::create([
            'nama' => 'Pendidikan Jasmani'
        ]);
        MataPelajaran::create([
            'nama' => 'Kimia'
        ]);
        MataPelajaran::create([
            'nama' => 'Biologi'
        ]);
        MataPelajaran::create([
            'nama' => 'Fisika'
        ]);
        MataPelajaran::create([
            'nama' => 'Ekonomi'
        ]);
        MataPelajaran::create([
            'nama' => 'Sosiologi'
        ]);
        MataPelajaran::create([
            'nama' => 'Sejarah'
        ]);
        MataPelajaran::create([
            'nama' => 'Akuntansi'
        ]);
    }
}
