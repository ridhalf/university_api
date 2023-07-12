<?php

namespace Database\Seeders;

use App\Models\KelasPelajaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinsiSeeder::class);
        $this->call(KotaSeeder::class);
        $this->call(MataPelajaranSeeder::class);
        $this->call(AngkatanSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(KelasPelajaranSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
