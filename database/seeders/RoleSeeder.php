<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run()
    {
        // membuat data array
        $roles =[
            [
                'name'  => 'admin'
            ],
            [
                'name'  => 'pelanggan'
            ]
        ];

        // memanggil dan model class Role
        Role::insert($roles);
    }
}
