<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $nidn = DB::table('dosen')->pluck('nidn')->toArray();
        $mk = DB::table('matakuliah')->pluck('kode_matakuliah')->toArray();

        for ($i = 0; $i < 100; $i++) {
            DB::table('jadwal')->insert([
                'kode_matakuliah' => $faker->randomElement($mk),
                'nidn' => $faker->randomElement($nidn),
                'kelas' => $faker->randomElement(['A', 'B', 'C']),
                'hari' => $faker->dayOfWeek,
                'jam' => $faker->time(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}