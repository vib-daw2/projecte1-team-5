<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;
class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            ['id'=>'01',
                'name'=>'Play Station 5',
                'weight'=>'2',
                'warehouse_id'=>'01'
            ],
            ['id'=>'02',
                'name'=>'Fifa 22',
                'weight'=>'1',
                'warehouse_id'=>'01'
            ],
            ['id'=>'03',
                'name'=>'Call Of Duty Modern Warfare',
                'weight'=>'3',
                'warehouse_id'=>'01'
            ],
            ['id'=>'04',
                'name'=>'Snake',
                'weight'=>'2',
                'warehouse_id'=>'01'
            ],
            ['id'=>'05',
                'name'=>'Polvora',
                'weight'=>'20',
                'warehouse_id'=>'02'
            ],
            ['id'=>'06',
                'name'=>'Bombas',
                'weight'=>'35',
                'warehouse_id'=>'02'
            ],
            ['id'=>'07',
                'name'=>'Veneno',
                'weight'=>'500',
                'warehouse_id'=>'02'
            ],
            ['id'=>'08',
                'name'=>'Tabaco',
                'weight'=>'20',
                'warehouse_id'=>'02'
            ],
            ['id'=>'09',
                'name'=>'Subwoofer',
                'weight'=>'5',
                'warehouse_id'=>'03'
            ],
            ['id'=>'10',
                'name'=>'Radio',
                'weight'=>'3',
                'warehouse_id'=>'03'
            ],
            ['id'=>'11',
                'name'=>'Altavoces',
                'weight'=>'10',
                'warehouse_id'=>'03'
            ],
            ['id'=>'12',
                'name'=>'Amplificador',
                'weight'=>'25',
                'warehouse_id'=>'03'
            ],
            ['id'=>'13',
                'name'=>'Sudadera Nike',
                'weight'=>'1',
                'warehouse_id'=>'04'
            ],
            ['id'=>'14',
                'name'=>'Shorts Adidas',
                'weight'=>'3',
                'warehouse_id'=>'04'
            ],
            ['id'=>'15',
                'name'=>'Camiseta DC',
                'weight'=>'1',
                'warehouse_id'=>'04'
            ],
            ['id'=>'16',
                'name'=>'Zapatos Jordan',
                'weight'=>'1',
                'warehouse_id'=>'04'
            ],
        ];

        Package::insert($packages);
    }
}
