<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentLike;

class TalentLikeTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentLikeTableSeeder::class,
     * php artisan db:seed --class=TalentLikeTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentLike::create([
            'talent_id' => 1,
            'deskripsi_like' => null,
        ]);
    }
}
