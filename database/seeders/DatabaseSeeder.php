<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class databaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            WarehouseSeeder::class,
            PackageSeeder::class,
            TruckSeeder::class,
            UserSeeder::class,
            SellSeeder::class,
        ]);
    }
}
