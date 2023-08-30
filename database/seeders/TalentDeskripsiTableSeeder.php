<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentDeskripsi;

class TalentDeskripsiTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentDeskripsiTableSeeder::class,
     * php artisan db:seed --class=TalentDeskripsiTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentDeskripsi::create([
            'talent_id' => 1,
            'deskripsi_singkat' => null,
        ]);
    }
}
