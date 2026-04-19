<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            DB::table('dosen')->insert([
                'nidn' => $faker->unique()->numerify('##########'),
                'nama' => $faker->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}