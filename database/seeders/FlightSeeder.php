<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat data dummy
            $flights = [
                [
                    'name'      => 'Domestik',
                    // 'type'      => 0S
                ],
                [
                    'name'      => 'Domestik',
                    // 'type'      => 1
                ]
            ];
        // memanggil nama class Flight
        Flight::insert($flights);
    }
}
