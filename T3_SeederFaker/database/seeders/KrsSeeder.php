<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KrsSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $npm = DB::table('mahasiswa')->pluck('npm')->toArray();
        $mk = DB::table('matakuliah')->pluck('kode_matakuliah')->toArray();

        for ($i = 0; $i < 100; $i++) {
            DB::table('krs')->insert([
                'npm' => $faker->randomElement($npm),
                'kode_matakuliah' => $faker->randomElement($mk),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}