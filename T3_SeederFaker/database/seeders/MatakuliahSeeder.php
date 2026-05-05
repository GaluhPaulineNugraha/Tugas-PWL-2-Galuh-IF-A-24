<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama
        DB::table('matakuliah')->delete();
        
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 50; $i++) {
            DB::table('matakuliah')->insert([
                'kode_matakuliah' => $faker->unique()->bothify('MK###'),
                'nama_matakuliah' => $faker->words(3, true),
                'sks' => $faker->randomElement([2, 3, 4]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}