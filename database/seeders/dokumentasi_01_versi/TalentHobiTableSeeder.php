<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentHobi;

class TalentHobiTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentHobiTableSeeder::class,
     * php artisan db:seed --class=TalentHobiTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentHobi::create([
            'talent_id' => 1,
            'deskripsi_hobi' => null,
        ]);
    }
}
