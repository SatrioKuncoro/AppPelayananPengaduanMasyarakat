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
                'name'    => 'Arief',
                'email'      => 'arief21@gmail.com',
                'password'  => bcrypt('arief21')
            ],
            [
                'id'        =>  2,
                'name'    => 'Satrio Kuncoro',
                'email'      => 'satrioKuncoro21@gmail.com',
                'password'  => bcrypt('SatrioKuncoro')
            ],
            [
                'id'        =>  3,
                'name'    => 'Caca Cahyana',
                'email'      => 'cahcaCahyana@gmail.com',
                'password'  => bcrypt('cahyana')
            ],
            [
                'id'        =>  4,
                'name'    => 'Sudirman',
                'email'      => 'Sudirman21@gmail.com',
                'password'  => bcrypt('sudirman21')
            ],
         ];

        User::insert($users);
    }
}
