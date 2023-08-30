<?php

use Illuminate\Database\Seeder;
use App\Models\TalentBio;

class TalentBioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TalentBio::create([
            'talent_id' => '1',
            'fullname' => 'Aulia Nafisah',
            'sosmed_ig' => 'joy',
            'address' => 'malang',
            'height' => '166',
        ]);
    }
}
