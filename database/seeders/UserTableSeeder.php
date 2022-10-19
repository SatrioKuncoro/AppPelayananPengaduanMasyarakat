<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {

        $users = [
            [
                'id'        =>  1,
                'name'      => 'Arief',
                'role_id'   => 2,
                'email'     => 'arief21@gmail.com',
                'password'  => bcrypt('arief21')
            ],
            [
                'id'        =>  2,
                'name'      => 'Satrio Kuncoro',
                'role_id'   => 1,
                'email'     => 'satrioKuncoro21@gmail.com',
                'password'  => bcrypt('SatrioKuncoro')
            ],
            [
                'id'        =>  3,
                'name'      => 'Caca Cahyana',
                'role_id'   => 2,
                'email'     => 'cahcaCahyana@gmail.com',
                'password'  => bcrypt('cahyana')
            ],
            [
                'id'        =>  4,
                'name'      => 'Sudirman',
                'role_id'   => 2,
                'email'     => 'Sudirman21@gmail.com',
                'password'  => bcrypt('sudirman21')
            ],
         ];

        User::insert($users);
    }
}
