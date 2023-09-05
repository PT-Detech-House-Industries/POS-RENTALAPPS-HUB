<?php

namespace Database\Seeders;

use App\Models\OrderService;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrderService::create([
            'invoice' => 'null',
            'start_service' => '2022-01-01',
            'end_service' => '2022-01-01',
            'total_payment' => 0,
            'status_order' => 'null',
        ]);

        OrderService::create([
            'invoice' => 'null',
            'start_service' => '2022-01-01',
            'end_service' => '2022-01-01',
            'total_payment' => 0,
            'status_order' => 'null',
        ]);
    }
}
