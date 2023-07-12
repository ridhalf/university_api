<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayValues = ['P', 'L'];
        $faker = Faker::create('id_ID');
        for ($i = 1; $i < 100; $i++) {
            Mahasiswa::create([
                'nama' => $faker->name,
                'email' => $faker->safeEmail,
                'provinsi_id' =>  rand(1, 33),
                'kota_id' => rand(1, 100),
                'tanggal_lahir' =>  $faker->dateTimeBetween('1999-01-01', '2001-06-31')->format('Y-m-d'),
                'jenis_kelamin' => $arrayValues[rand(0, 1)],
                'kelas_id' => rand(1, 18)

            ]);
        }
    }
}
