<?php

use Illuminate\Database\Seeder;
use App\Models\Talent;

class TalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Talent::create([
            'user_id' => 2,
            'id_account' => '220701',
            'nickname' => 'joy',
            'photo_profile' => 'talent_joy.jpg',
            'intro_voice' => 'voice_joy.mp3',
            'rating' => 5,
            'number_wa' => '089528081502',
            'short_description' => 'uwu',
            'status' => 'active',
        ]);

        // Talent::create([
        //     'user_id' => 4,
        //     'id_account' => '220702',
        //     'nickname' => 'nana',
        //     'photo_profile' => 'talent_nana.jpg',
        //     'intro_voice' => 'voice_nana.mp3',
        //     'rating' => 5,
        //     'number_wa' => '085755181803',
        //     'short_description' => 'uwu',
        //     'status' => 'active',
        // ]);
    }
}
