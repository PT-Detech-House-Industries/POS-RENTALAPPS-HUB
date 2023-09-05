<?php

namespace Database\Seeders;

use App\Models\OrderTemp;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTempTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'client_id' => 1,
                'servicetalent_id' => 1,
                'talent_id' => 1,
                'price_service' => 100,
                'qty_service' => 2,
                'start_service' => '2023-09-10 08:00:00',
                'end_service' => '2023-09-10 12:00:00',
                'subtotal_service' => 200,
            ],
            [
                'client_id' => 2,
                'servicetalent_id' => 2,
                'talent_id' => 2,
                'price_service' => 150,
                'qty_service' => 3,
                'start_service' => '2023-09-11 10:00:00',
                'end_service' => '2023-09-11 13:00:00',
                'subtotal_service' => 450,
            ],
            // Tambahkan data order lainnya sesuai kebutuhan
        ];

        foreach ($orders as $orderData) {
            OrderTemp::create($orderData);
        }
    }
}
