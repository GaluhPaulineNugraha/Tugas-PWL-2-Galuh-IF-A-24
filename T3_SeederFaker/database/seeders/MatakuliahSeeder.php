<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('matakuliah')->insert([
                'kode_matakuliah' => $faker->unique()->bothify('MK###'),
                'nama_matakuliah' => $faker->word,
                'sks' => rand(2, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}