<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Warehouse;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouses= [
            ['id'=>'01',
                'name'=>'Videojuegos',
            ],
            ['id'=>'02',
                'name'=>'Sustancias Toxicas',
            ],
            ['id'=>'03',
                'name'=>'Electronico',
            ],
            ['id'=>'04',
                'name'=>'Ropa',
            ],
        ];

        Warehouse::insert($warehouses);
    }
}
