<?php

namespace Database\Seeders;

use App\Models\ServiceTalent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ServiceTalent::insert([
            [
                'service_code' => 'SR11',
                'service_name' => 'Chatting',
                'duration' => '1 Hari',
                'price_service' => 50000,
                'description' => 'term and condition',
                'point' => 0,
            ], [
                'service_code' => 'SR12',
                'service_name' => 'Chatting',
                'duration' => '3 Hari',
                'price_service' => 100000,
                'description' => 'term and condition',
                'point' => 0,
            ], [
                'service_code' => 'SR13',
                'service_name' => 'Chatting',
                'duration' => '7 Hari',
                'price_service' => 150000,
                'description' => 'term and condition',
                'point' => 0,
            ], [
                'service_code' => 'SR14',
                'service_name' => 'Calls',
                'duration' => '30 Hari',
                'price_service' => 700000,
                'description' => 'term and condition',
                'point' => 0,
            ],
        ]);

        $datas = array(
            array(
                'service_code' => 'SR15',
                'service_kind' => 'Additional Service',
                'service_name' => 'Calls',
                'duration' => '30 Menit',
                'price_service' => 40000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR16',
                'service_kind' => 'Additional Service',
                'service_name' => 'Calls',
                'duration' => '60 Menit',
                'price_service' => 60000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR17',
                'service_kind' => 'Additional Service',
                'service_name' => 'Video Calls',
                'duration' => '30 Menit',
                'price_service' => 55000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR18',
                'service_kind' => 'Additional Service',
                'service_name' => 'Video Calls',
                'duration' => '60 Menit',
                'price_service' => 75000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR19',
                'service_kind' => 'Additional Service',
                'service_name' => 'Voice Note',
                'duration' => '1 Pcs',
                'price_service' => 35000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR110',
                'service_kind' => 'Additional Service',
                'service_name' => 'Voice Note',
                'duration' => '1 Pcs',
                'price_service' => 50000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR111',
                'service_kind' => 'Additional Service',
                'service_name' => 'PAP Full Face',
                'duration' => '1 Pcs',
                'price_service' => 40000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR112',
                'service_kind' => 'Additional Service',
                'service_name' => 'PAP Masker',
                'duration' => '1 Pcs',
                'price_service' => 25000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            // array(
            //     'service_id' => 'SR213',
            //     'service_sort' => 'Offline Dating',
            //     'service_name' => 'Sebagai Pacar',
            //     'duration' => '1 Pcs',
            //     'price_service' => 300000,
            //     'description' => 'term and condition',
            //     'point' => 0,
            // ),

        );

        $datas_offline = array(
            array(
                'service_code' => 'SR213',
                'service_sort' => 'Offline Dating',
                'service_kind' => 'Main Service',
                'service_name' => 'Sebagai Pacar',
                'duration' => '3 Jam',
                'price_service' => 300000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR214',
                'service_sort' => 'Offline Dating',
                'service_kind' => 'Additional Service',
                'service_name' => 'Sebagai Pacar Extends',
                'duration' => '1 Jam',
                'price_service' => 70000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR215',
                'service_sort' => 'Offline Dating',
                'service_kind' => 'Main Service',
                'service_name' => 'Sebagai Teman',
                'duration' => '3 Jam',
                'price_service' => 500000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_code' => 'SR216',
                'service_sort' => 'Offline Dating',
                'service_kind' => 'Main Service',
                'service_name' => 'Nonton Bioskop',
                'duration' => '1 Film',
                'price_service' => 200000,
                'description' => 'term and condition',
                'point' => 0,
            ),

        );

        foreach ($datas as $data) {
            ServiceTalent::create([
                'service_code' => $data['service_code'],
                'service_kind' => $data['service_kind'],
                'service_name' => $data['service_name'],
                'duration' => $data['duration'],
                'price_service' => $data['price_service'],
                'description' => $data['description'],
                'point' => $data['point'],
            ]);
        }

        foreach ($datas_offline as $data) {
            ServiceTalent::create([
                'service_code' => $data['service_code'],
                'service_sort' => $data['service_sort'],
                'service_kind' => $data['service_kind'],
                'service_name' => $data['service_name'],
                'duration' => $data['duration'],
                'price_service' => $data['price_service'],
                'description' => $data['description'],
                'point' => $data['point'],
            ]);
        }
    }
}
