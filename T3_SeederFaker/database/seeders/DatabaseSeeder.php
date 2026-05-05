<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan seeding yang benar (parent dulu, baru child)
        $this->call(DosenSeeder::class);
        $this->call(MatakuliahSeeder::class);  // Matakuliah sebelum Jadwal & KRS
        $this->call(MahasiswaSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(KrsSeeder::class);
    }
}