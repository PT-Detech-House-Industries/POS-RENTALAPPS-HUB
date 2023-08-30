<?php

use Illuminate\Database\Seeder;
use App\Models\rentService;

class RentServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rentService::create([
            'client_id' => 1,
            'servicetalent_id' => 1,
            'talent_id' => 1,
            'numberdays' => 5,
            'start_date' => '2022-7-10',
            'end_date' => '2022-7-15',
        ]);

        rentService::create([
            'client_id' => 1,
            'servicetalent_id' => 2,
            'talent_id' => 1,
            'numberdays' => 5,
            'start_date' => '2022-7-10',
            'end_date' => '2022-7-15',
        ]);
    }
}
