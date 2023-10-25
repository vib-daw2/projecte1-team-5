<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Truck;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trucks =[
            ['id'=>'01',
            'name'=>'Camion Videojuegos'
            ],
            ['id'=>'02',
            'name'=>'Camion Sustancias Toxicas'
            ],
            ['id'=>'03',
            'name'=>'Camion Electronica'
            ],
            ['id'=>'04',
            'name'=>'Camion Ropa'
            ],
        ];
    
        Truck::insert($trucks);
    }
}
