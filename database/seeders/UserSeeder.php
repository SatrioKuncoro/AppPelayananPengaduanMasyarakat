<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [
                'name'          => 'Asep',
                'email'         => 'asep@gmail.com',
                'password'      => bcrypt('admin')
            ],
            [
                'name'          => 'Arief',
                'email'         => 'arief@gmail.com',
                'password'      => bcrypt('tamu')
            ],
            [
                'name'          => 'Satrio Kuncoro',
                'email'         => 'satrioKuncoro@gmail.com',
                'password'      => bcrypt('admin')
            ]
        ];

        User::insert($users);
    }
}
