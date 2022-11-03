<?php

namespace Database\Seeders;

use App\Models\Complaint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $complaints=[
            [
                'nik'               => 'NIK210211',
                'text_complaint'    => 'Pipa selang bocor',
                'location'          => 'nagoya',
                'image'             => null,
                'status'            => 0,
                'role_id'           => 3,
                'user_id'            => 3
            ],
            [
                'nik'               => 'NIK210211',
                'text_complaint'    => 'Chaos masyarakat',
                'location'          => 'Tanjung Uncang',
                'image'             => null,
                'status'            => 0,
                'role_id'           => 3,
                'user_id'            => 3
            ]
        ];

        Complaint::insert($complaints);
    }
}
