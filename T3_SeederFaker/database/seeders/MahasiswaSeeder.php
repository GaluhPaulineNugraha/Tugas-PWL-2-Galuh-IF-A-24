<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $nidn = DB::table('dosen')->pluck('nidn')->toArray();

        for ($i = 0; $i < 100; $i++) {
            DB::table('mahasiswa')->insert([
                'npm' => $faker->unique()->numerify('##########'),
                'nidn' => $faker->randomElement($nidn),
                'nama' => $faker->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}