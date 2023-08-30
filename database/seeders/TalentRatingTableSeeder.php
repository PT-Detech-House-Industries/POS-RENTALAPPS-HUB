<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentRating;

class TalentRatingTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentRatingTableSeeder::class,
     * php artisan db:seed --class=TalentRatingTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentRating::create([
            'talent_id' => 1,
            'nilai_rating' => null,
            'detail_review' => null,
        ]);
    }
}
