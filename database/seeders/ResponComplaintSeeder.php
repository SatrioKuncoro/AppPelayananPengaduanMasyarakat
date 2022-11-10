<?php

namespace Database\Seeders;

use App\Models\ResponComplaint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResponComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response_complaints = [
            [
                'response'      => 'Segera di perbaiki',
                'complaint_id'  => 1,
                'user_id'       => 2
            ],
            [
                'response'      => 'Segera di perbaiki',
                'complaint_id'  => 2,
                'user_id'       => 2
            ]
        ];

        ResponComplaint::insert($response_complaints);
    }
}
