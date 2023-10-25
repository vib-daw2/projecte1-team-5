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
                'image'=>'ps5.jpg',
                'warehouse_id'=>'01'
            ],
            ['id'=>'02',
                'name'=>'Fifa 22',
                'weight'=>'1',
                'image'=>'fifa22.png',
                'warehouse_id'=>'01'
            ],
            ['id'=>'03',
                'name'=>'Call Of Duty Modern Warfare',
                'weight'=>'3',
                'image'=>'mw3.jpg',
                'warehouse_id'=>'01'
            ],
            ['id'=>'04',
                'name'=>'Resident Evil 4',
                'weight'=>'2',
                'image'=>'rs4.png',
                'warehouse_id'=>'01'
            ],
            ['id'=>'05',
                'name'=>'Polvora',
                'weight'=>'20',
                'image'=>'polvora.png',
                'warehouse_id'=>'02'
            ],
            ['id'=>'06',
                'name'=>'Bombas',
                'weight'=>'35',
                'image'=>'bomba.jpg',
                'warehouse_id'=>'02'
            ],
            ['id'=>'07',
                'name'=>'Veneno',
                'weight'=>'500',
                'image'=>'veneno.jpeg',
                'warehouse_id'=>'02'
            ],
            ['id'=>'08',
                'name'=>'Tabaco',
                'weight'=>'20',
                'image'=>'tabaco.jpeg',
                'warehouse_id'=>'02'
            ],
            ['id'=>'09',
                'name'=>'Subwoofer',
                'weight'=>'5',
                'image'=>'subwoofer.jpeg',
                'warehouse_id'=>'03'
            ],
            ['id'=>'10',
                'name'=>'Radio',
                'weight'=>'3',
                'image'=>'radio.jpeg',
                'warehouse_id'=>'03'
            ],
            ['id'=>'11',
                'name'=>'Altavoces',
                'weight'=>'10',
                'image'=>'altavoces.jpeg',
                'warehouse_id'=>'03'
            ],
            ['id'=>'12',
                'name'=>'Amplificador',
                'weight'=>'25',
                'image'=>'amplificador.jpeg',
                'warehouse_id'=>'03'
            ],
            ['id'=>'13',
                'name'=>'Sudadera Nike',
                'weight'=>'1',
                'image'=>'sudadera.jpeg',
                'warehouse_id'=>'04'
            ],
            ['id'=>'14',
                'name'=>'Shorts Adidas',
                'weight'=>'3',
                'image'=>'shorts.jpeg',
                'warehouse_id'=>'04'
            ],
            ['id'=>'15',
                'name'=>'Camiseta DC',
                'weight'=>'1',
                'image'=>'camiseta.jpeg',
                'warehouse_id'=>'04'
            ],
            ['id'=>'16',
                'name'=>'Zapatos Jordan',
                'weight'=>'1',
                'image'=>'jordans.jpeg',
                'warehouse_id'=>'04'
            ],
        ];

        Package::insert($packages);
    }
}
