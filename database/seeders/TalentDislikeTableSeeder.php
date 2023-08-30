<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentDislike;

class TalentDislikeTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentDislikeTableSeeder::class,
     * php artisan db:seed --class=TalentDislikeTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentDislike::create([
            'talent_id' => 1,
            'deskripsi_dislike' => null,
        ]);
    }
}
