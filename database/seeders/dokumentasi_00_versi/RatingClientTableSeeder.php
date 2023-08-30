<?php

use App\Models\ratingClient;
use Illuminate\Database\Seeder;

class RatingClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ratingClient::create([
            'rent_id' => 1,
            'client_id' => 1,
            'rating_point' => 5,
            'description_rating' => 'good',
        ]);
    }
}
