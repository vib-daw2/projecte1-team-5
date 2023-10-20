<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [   'id'=>'01',
                'name'=>'Admin',
                'email'=>'admin@admin.admin',
                'password'=>Hash::make('adminadmin'),            
                'role_id'=>'1',
            ],
        ];
    
        User::insert($users);
    }
}
