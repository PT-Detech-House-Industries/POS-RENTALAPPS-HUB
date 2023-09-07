<?php

namespace Database\Seeders;

use App\Models\OrderDetail;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderDetails = [
            [
                'invoice' => '001',
                'client_id' => 1,
                'servicetalent_id' => 1,
                'talent_id' => 1,
                'price_service' => 100,
                'qty_service' => 2,
                'start_service' => '2023-09-10 08:00:00',
                'end_service' => '2023-09-10 12:00:00',
                'subtotal_service' => 200,
                'status_service' => 'completed',
            ],
            // [
            //     'invoice' => '002',
            //     'client_id' => 2,
            //     'servicetalent_id' => 2,
            //     'talent_id' => 2,
            //     'price_service' => 150,
            //     'qty_service' => 3,
            //     'start_service' => '2023-09-11 10:00:00',
            //     'end_service' => '2023-09-11 13:00:00',
            //     'subtotal_service' => 450,
            //     'status_service' => 'pending',
            // ],
            // Tambahkan data order detail lainnya sesuai kebutuhan
        ];

        foreach ($orderDetails as $orderDetailData) {
            OrderDetail::create($orderDetailData);
        }
    }
}
