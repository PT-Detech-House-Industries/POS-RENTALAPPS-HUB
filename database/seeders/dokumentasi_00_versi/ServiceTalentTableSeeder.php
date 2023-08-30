<?php

use Illuminate\Database\Seeder;
use App\Models\serviceTalent;

class ServiceTalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        serviceTalent::create([
            'name_service' => 'Video Call',
            'price_service' => '50000',
            'description' => 'Service Video Call',
        ]);

        serviceTalent::create([
            'name_service' => 'Voice Call',
            'price_service' => '30000',
            'description' => 'Service Voice Call',
        ]);
    }
}
