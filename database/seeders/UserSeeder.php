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
                'role_id'       => 2,
                'password'      => bcrypt('admin')
            ],
            [
                'name'          => 'Arief',
                'email'         => 'arief@gmail.com',
                'role_id'       => 2,
                'password'      => bcrypt('tamu')
            ],
            [
                'name'          => 'Satrio Kuncoro',
                'email'         => 'satrioKuncoro@gmail.com',
                'role_id'       => 1,
                'password'      => bcrypt('admin')
            ],
            [
                'name'          => 'Asep Sutisno',
                'email'         => 'asepsutisno@gmail.com',
                'role_id'       => 3,
                'password'      => bcrypt('masyarakat')
            ]
        ];

        User::insert($users);
    }
}
