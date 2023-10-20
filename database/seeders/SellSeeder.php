<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sell;

class SellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sells = [
            ['id'=>'1',
                'user_id'=>'1',
                'package_id'=>'1',
                'truck_id'=>'1'
            ],
            ['id'=>'2',
                'user_id'=>'1',
                'package_id'=>'2',
                'truck_id'=>'2'
            ],
            ['id'=>'3',
                'user_id'=>'1',
                'package_id'=>'3',
                'truck_id'=>'3'
            ],
            ['id'=>'4',
                'user_id'=>'1',
                'package_id'=>'4',
                'truck_id'=>'4'
            ],
            ['id'=>'5',
                'user_id'=>'1',
                'package_id'=>'15',
                'truck_id'=>'4'
            ],
        ];

        Sell::insert($sells);
    }
}