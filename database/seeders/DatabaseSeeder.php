<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BarangSeeder::class);
        $this->call(PelangganSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(DBarangSeeder::class);
        $this->call(DPelangganSeeder::class);
        $this->call(DPegawaiSeeder::class);
        $this->call(DSupplierSeeder::class);
    }
}
