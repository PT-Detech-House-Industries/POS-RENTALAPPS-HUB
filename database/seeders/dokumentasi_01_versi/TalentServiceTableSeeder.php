<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentService;

class TalentServiceTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentServiceTableSeeder::class,
     * php artisan db:seed --class=TalentServiceTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentService::create([
            'talent_id' => 1,
            'status_service' => null,
        ]);
    }
}
